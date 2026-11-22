<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $complexesDb = Complex::with(['headOfComplex', 'priest'])->active()->get();

        $hero = [
            'badge'           => 'Hubungi Kami',
            'title_prefix'    => 'Mari Terhubung',
            'title_highlight' => 'Dengan Kami',
            'description'     => 'Kami siap membantu Anda. Sampaikan pertanyaan, saran, atau kebutuhan informasi seputar Pondok Pesantren Annuqayah Latee.',
        ];

        $infoCards = [
            'alamat' => [
                'title' => 'Alamat',
                'lines' => [
                    'Jln. Makam Pahlawan Kompleks Pondok Pesantren Annuqayah',
                    'Guluk-Guluk, Sumenep, Jawa Timur',
                    'Pos: 69463',
                ],
            ],
            'email' => [
                'title'       => 'Email',
                'description' => 'Kirimkan pertanyaan atau dokumen melalui surel resmi kami.',
                'main_email'  => 'ppa.lateeputra@gmail.com',
            ],
            'telepon' => [
                'title'          => 'Telepon / WhatsApp',
                'description'    => 'Layanan telepon dan WhatsApp pada jam operasional kantor (08.00 - 16.00 WIB).',
                'main_phone'     => '+62 823-3155-8951',
                'main_phone_raw' => '+6282331558951',
            ],
        ];

        $mapUrl = 'https://maps.google.com/maps?q=-7.063513125594612,113.6731071478099&t=&z=16&ie=UTF8&iwloc=&output=embed';

        $defaultPhones = [
            'Latee Putra' => [
                ['label' => 'Office', 'number' => '+62-823-3155-8951', 'link' => 'tel:+6282331558951'],
                ['label' => 'Madal',  'number' => '+62-852-3587-5705', 'link' => 'tel:+6285235875705'],
                ['label' => 'Kamtib', 'number' => '+62-852-3202-8342', 'link' => 'tel:+6285232028342'],
            ],
            'Latee I Putri' => [
                ['label' => 'Office',  'number' => '+62-823-3550-9029', 'link' => 'tel:+6282335509029'],
                ['label' => 'Madal I', 'number' => '+62-823-3358-6567', 'link' => 'tel:+6282333586567'],
            ],
            'Latee II Putri' => [
                ['label' => 'Office',    'number' => '+62-853-3657-7854', 'link' => 'tel:+6285336577854'],
                ['label' => 'Madal II',  'number' => '+62-823-3495-6872', 'link' => 'tel:+6282334956872'],
                ['label' => 'Kamtib II', 'number' => '+62-823-3714-5089', 'link' => 'tel:+6282337145089'],
            ],
        ];

        $defaultEmails = [
            'Latee Putra'    => 'ppa.lateeputra@gmail.com',
            'Latee I Putri'  => 'annuqayahlatee1@gmail.com',
            'Latee II Putri' => 'eldejaya@gmail.com',
        ];

        $complexContacts = $complexesDb->map(function ($c) use ($defaultPhones, $defaultEmails) {
            $name = $c->complex_name;
            return [
                'name'   => $name,
                'email'  => $defaultEmails[$name] ?? ($c->headOfComplex?->email ?? 'info@annuqayahlatee.sch.id'),
                'phones' => $defaultPhones[$name] ?? [
                    ['label' => 'Office', 'number' => '+62-823-3155-8951', 'link' => 'tel:+6282331558951'],
                ],
            ];
        })->toArray();

        if (empty($complexContacts)) {
            $complexContacts = [
                [
                    'name'   => 'Latee Putra',
                    'email'  => 'ppa.lateeputra@gmail.com',
                    'phones' => $defaultPhones['Latee Putra'],
                ],
                [
                    'name'   => 'Latee I (Putri)',
                    'email'  => 'annuqayahlatee1@gmail.com',
                    'phones' => $defaultPhones['Latee I Putri'],
                ],
                [
                    'name'   => 'Latee II (Putri)',
                    'email'  => 'eldejaya@gmail.com',
                    'phones' => $defaultPhones['Latee II Putri'],
                ],
            ];
        }

        return view('contact', compact('hero', 'infoCards', 'mapUrl', 'complexContacts', 'complexesDb'));
    }
}
