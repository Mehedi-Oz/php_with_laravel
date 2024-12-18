<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Customer extends Model
{
    use HasFactory;

    public static $customer, $image, $imageNewName, $directory, $imgUrl;

    public static function saveCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->phone = $request->phone;
        self::$customer->password = bcrypt($request->password);
        self::$customer->save();

        Session::put('customerId', self::$customer->id);
        Session::put('customerName', self::$customer->name);
        Session::put('customerEmail', self::$customer->email);
//        Session::put('customerImage', self::$customer->image);
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'Customer-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'front-end-asset/upload-images/customer/';

        if (!file_exists(self::$directory)) {
            mkdir(self::$directory, 0755, true);
        }

        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl = self::$directory . self::$imageNewName;
    }
}
