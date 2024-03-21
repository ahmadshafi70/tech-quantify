<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function qoutemail(Request $request){
            
            $validated = $request->validate([
                'fname' => ['required'],
                'lname' => ['required'],   
                'email' => ['required'],
                'phone' => ['required'],
                'project_type' => ['required'],
                
            ]);
        
        $to = "ahmadshafi70@gmail.com, sales@techhost.pk";
        $subject = "Website Development";

        $message = "
        <html>
        <head>
        <title>'.$request->fname.'</title>
        </head>
        <body>
        <p>..</p>
        <table>
        <tr>
           <th>Full Name</th>
           <td>'.$request->fname.'.'.$request->lname.'</td>
        </tr>
        <tr>
             <th>Email</th>
             <td>'.$request->email.'</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>'.$request->phone.'</td>
        </tr>
        <tr>
            <th>budget</th>
            <td>'.$request->budget.'</td>
        </tr>
        
        

        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <sales@techhost.pk>' . "\r\n";
        $headers .= 'Cc: sales@techhost.pk' . "\r\n";

        mail($to,$subject,$message,$headers);
            

    }
}
