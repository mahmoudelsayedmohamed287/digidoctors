<?php
namespace App\Http\Controllers\admin;
session_start();
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\admin;
use DB;

class loginController extends Controller
{
  
    public function create(){
        
        return view('admin.adminlogin');
    }

    

    public function login(Request $request){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $request->email;
            $password = $request->password;
             
            $admin = DB::table('users')
			->select('name')
			->where('email', '=', $email)
            ->get();


            
           $_SESSION['name'] = $admin;
           $_SESSION['email'] = $email;
           if(count($admin)>0){
            return redirect('dashboard');
           }
           else{
            return redirect('admin');
           }
        }else{
            return rdirect('admin');
        }
        }   

           public function logout(Request $request){
           
            session_unset();
            return redirect('admin');
        }

        public function profile(Request $request){
        $user = $_SESSION['email'];
       
       
        $data = DB::table('users')
        ->select()
        ->where('email', '=', $user)
        ->get();
       
           return view('admin.edituser')->with('data',$data);
             
      
      
          }
          public function update(Request $request,$id){
      
            $users = admin::find($id);
         if(!empty($_FILES['mainimg']['name'])){
    
            
            $image = $_FILES['mainimg']['name'];
            $target = 'frontEnd/images/'.basename($_FILES['mainimg']['name']);
            
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->image = $target; 
            $users->update();
        
            move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
        
            return redirect('profile');
         }else{
    
            
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->update();
            return redirect('profile');
    
         }
    
        }

        }
          
     
       
  
      
   
 

