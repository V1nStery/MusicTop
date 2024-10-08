<?php

namespace App\Models;

use Illuminate\http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\httpFoundation\file\UploadedFile;

class Customer extends Model
{
    use HasFactory;

    protected $fillable;
    private $name;
    private $email;
    private $courseDate;
    private $dbfile = 'public/db.json';
    private $imageDir = 'public/image';
    private $disk;

    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->disk = $disk->input('name');
        $this->email = $email->input('name');

    }
    public function getField()
    {
        return [
            'user' => $this->user,
            'photo' => $this->uploadedFile->getClientOriginalName(),
            'email' => $this->email,
        ];
    }

    protected function storeImage()
    {

        $this->uploadedFile->store($this->imageDir);
        // Storage::disk( $this->disk)->put(
        //     $this->uploadedFile->getClientOriginalName(),
        //     file_get_contents( $this->uploadedFile->getRealPath())
        // );
    }
}
