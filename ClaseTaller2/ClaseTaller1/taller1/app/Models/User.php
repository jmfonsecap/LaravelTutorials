<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  HasFactory;

    /**
     * PRODUCT ATTRIBUTES

     * $this->attributes['id'] - int - contains the user primary key (id)

     * $this->attributes['name'] - string - contains the user's name

     * $this->attributes['email'] - string - contains the user's email

     * $this->attributes['phoneNumber'] - string - contains the user's phone number

     * $this->attributes['address'] - string - contains the user's address

     * $this->attributes['paymentMethod'] - string - contains the user's payment method

     * $this->attributes['postalCode'] - string - contains the user's postal Code

     * $this->attributes['country'] - string - contains the user's country
     */
    protected $fillable = ['name', 'email', 'phoneNumber', 'address',
        'paymentMethod', 'postalCode', 'country'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function setEmail($email): void
    {
        $this->attributes['email'] = $email;
    }

    public function getPhoneNumber(): string
    {
        return $this->attributes['phoneNumber'];
    }

    public function setPhoneNumber($phoneNumber): void
    {
        $this->attributes['phoneNumber'] = $phoneNumber;
    }

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress($address): void
    {
        $this->attributes['address'] = $address;
    }

    public function getPaymentMethod(): string
    {
        return $this->attributes['paymentMethod'];
    }

    public function setPaymentmethod($paymentMethod): void
    {
        $this->attributes['paymentMethod'] = $paymentMethod;
    }

    public function getPostalCode(): string
    {
        return $this->attributes['postalCode'];
    }

    public function setPostalCode($postalCode): void
    {
        $this->attributes['postalCode'] = $postalCode;
    }

    public function getCountry(): string
    {
        return $this->attributes['country'];
    }

    public function setCountry($country): void
    {
        $this->attributes['country'] = $country;
    }
}
