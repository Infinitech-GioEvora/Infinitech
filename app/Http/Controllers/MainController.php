<?php

namespace App\Http\Controllers;

use App\Models\Employee as Employees;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use JeroenDesloovere\VCard\VCard;

class MainController extends Controller
{
    public function dashboard_data()
    {
        $data["all"] = Employees::all()->count();
    }

    public function all()
    {
        $records = Employees::all();
        $data = ['records' => $records];
        return response($data);
    }

    public function edit($id)
    {
        $record = Employees::find($id);

        $data = [
            'record' => $record,
        ];

        return response($data);
    }


    public function employ($employee_id)
    {
        $record = Employees::where('employeeID', $employee_id)->first();

        if ($record == null) {
            return view('error/PageNotFound');
        } else {
          
            return view('Employee/viewemploy', compact('record'));
        }
    }

    public $ent = "Employee";

    public function add(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'position' => 'required',
            'employeeID' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'telegram' => 'required',
            'wechat' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'viber' => 'required',
            'whatsapp' => 'required',
            'profile' => 'required|file|mimes:jpg,png,jpeg|max:2048',
        ]);

        $record = new Employees();
        $qrcode = QrCode::format('png')
            ->size(512)
            ->errorCorrection('L')
            ->margin(1)
            ->generate(
                "https://infinitechphil.com/employee/" . $request['employeeID']
            );

        $keys = ['lastname', 'firstname', 'middlename', 'position', 'employeeID',  'phone', 'email', 'facebook', 'telegram', 'wechat', 'viber', 'whatsapp', 'profile', 'qrcode'];

        foreach ($keys as $key) {
            if ($key == 'qrcode') {
                $filename = $request['employeeID'] . '.png';
                Storage::disk('public')->put('qrcodes/' . $filename, $qrcode);
                $record->$key = $filename;
            } elseif ($key == 'wechat') {
                if ($request->hasFile('wechat')) {
                    $file = $request->file('wechat');
                    $filename = $file->getClientOriginalName();
                    $filePath = $file->move('wechat', $filename, 'public');
                    $record->$key = $filename;
                }
            } elseif ($key == 'profile') {
                if ($request->hasFile('profile')) {
                    $file = $request->file('profile');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->move('profiles', $filename, 'public');
                    $record->$key = $filename;
                }
            } else {
                $record->$key = $request->$key;
            }
        }
        $record->save();

        return response(['msg' => "Added $this->ent"]);
    }

    public function upd(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'position' => 'required',
            'employeeID' => 'required',
    
            'facebook' => 'required',
            'telegram' => 'required',
            'viber' => 'required',
            'whatsapp' => 'required',
        ]);

        $record = Employees::find($request->id);

        $keys = [
            'lastname',
            'firstname',
            'middlename',
            'position',
            'employeeID',
          
            'facebook',
            'telegram',
            'wechat',
            'viber',
            'whatsapp',
            'profile',
        ];

        foreach ($keys as $key) {
            if ($key == 'wechat') {
                if ($request->hasFile('wechat')) {
                    $file = $request->file('wechat');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->move('wechat', $filename, 'public');
                    $upd[$key] = $filename;
                }
            } elseif ($key == 'profile') {
                if ($request->hasFile('profile')) {
                    $paths = [];
                    array_push($paths, public_path("profiles/" . $record->profile));
            
                    foreach ($paths as $path) {
                        file_exists($path) ? unlink($path) : false;
                    }
                  
                    $file = $request->file('profile');
                    $filename = $file->getClientOriginalName();
                    $filePath = $file->move('profiles', $filename, 'public');

                    $upd[$key] = $filename;
                }
            } else {
                $upd[$key] = $request->$key;
            }
        }

      

        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id)
    {
        $record = Employees::find($id);

        $paths = [];
        array_push($paths, public_path("wechat/" . $record->wechat));
        array_push($paths, public_path("uploads/qrcodes/" . $record->qrcode));
        array_push($paths, public_path("profiles/" . $record->profile));

        foreach ($paths as $path) {
            file_exists($path) ? unlink($path) : false;
        }

        $record->delete();

        return response(['msg' => "Deleted $this->ent"]);
    }

    public function downloadVCard(Request $request)
    {
        $id = $request->input('id'); 
        $user = Employees::where('employeeID', '24-0002')->first();
        
        if (!$user) {
            return response()->json(['error' => 'User not found.']);
        }
        $fname = explode(" ", $user->firstname)[0];
    
        $vCard = new VCard();
        $vCard->addName($fname, $user->lastname);
        $vCard->addEmail($user->email, $type='Email');
        $vCard->addPhoneNumber($user->phonenumber, $type='WORK');
        $vCard->addJobtitle("Infinitech Advertising Corporation - ". $user->position);
        $vCard->addAddress($name = '', $extended = 'Unit 311, Campos Rueda Bldg.', $street = 'Urban Ave.', $city ='Makati City', $region='NCR', $zip='5200', $country='Philippines', $type='WORK');
        $vCard->addURL("https://infinitechphil.com/");
       
    
        $vCardDirectory = public_path('vcard');
        
    
        if (!file_exists($vCardDirectory)) {
            mkdir($vCardDirectory, 0755, true);
        }
    
    
        $name = $user->lastname . '-' . $fname;
        $filename = strtolower($name) . '.vcf';
        $filePath = $vCardDirectory . DIRECTORY_SEPARATOR . $filename; 
    
    
        $vCard->setSavePath($vCardDirectory);
        $vCard->save($filename);
    
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'vCard not generated: ' . $filePath]);
        }
    
      
        return response()->download($filePath);
    }
    

    // public function showAngelle() {
    //     $record = Employees::where('employee_id', '24-00010')->first();
    //     return view('Credential/SirGel', compact('record'));
    // } 
    public function showKrissa() {
        $record = Employees::where('employeeID', '24-0002')->first();
        return view('Credential/MamKrissa', compact('record'));
    } 
    public function showSol() {
        $record = Employees::where('employeeID', '24-00012')->first();
        return view('Credential/MamSol', compact('record'));
    } 
    public function showGio() {
        $record = Employees::where('employeeID', '24-0004')->first();
        return view('Credential/SirGio', compact('record'));
    } 
    public function showJustin() {
        $record = Employees::where('employeeID', '24-0003')->first();
        return view('Credential/SirJustin', compact('record'));
    } 
    public function showMoser() {
        $record = Employees::where('employeeID', '24-0005')->first();
        return view('Credential/SirMoses', compact('record'));
    } 
    public function showKim() {
        $record = Employees::where('employeeID', '24-00010')->first();
        return view('Credential/MsKim', compact('record'));
    } 
    public function showDarlene() {
        $record = Employees::where('employeeID', '24-0008')->first();
        return view('Credential/MsDarlene', compact('record'));
    } 
    public function showLyca() {
        $record = Employees::where('employeeID', '24-0009')->first();
        return view('Credential/Mslyca', compact('record'));
    } 
    public function showAlly() {
        $record = Employees::where('employeeID', '24-00011')->first();
        return view('Credential/MamAly', compact('record'));
    } 
    public function showRea() {
        $record = Employees::where('employeeID', '24-00013')->first();
        return view('Credential/MamRea', compact('record'));
    } 

}
