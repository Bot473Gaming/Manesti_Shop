<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_SubBanners;

class SubBanner extends BaseController
{
    public function __construct()
    {
        $this->SubBanners     = new Model_SubBanners();
    }
    public function index()
    {
        // all, waiting, shipping, delivered, cancel
        $subbanner     = $this->SubBanners->getAllSubBanners();
        // if (!$subbanner) {
        //     $subbanner = [
        //         (object)[
        //             'image' => ''
        //         ]
        //     ];
        // }
        $data   = [
            'title'     => 'Sub Banner',
            'page'      => 'subbanner',
            'data'      => [
                'subbanner' => $subbanner,
            ],
        ];
        // echo "<pre>";
        // print_r($data);
        return view('admin/layout', $data);
    }
    public function update()
    {
        
        $subbanner  = $this->SubBanners->getAllSubBanners();
        $ok_img     = json_decode($_POST['ok-img']);
        $url        = json_decode($_POST['url']);
        $config['max_size'] = '1000000';
        $imagefile = $this->request->getFiles();
        foreach($url as $index=>$ul) {
            if ($subbanner[$index]->url != $ul) {
                $subbanner[$index]->url = $ul;  
                $this->SubBanners->updateSubBanner(json_decode(json_encode($subbanner[$index]), true), $index);
            }
        }
        foreach ($imagefile as $key => $img) {
                // echo "okok ";
                // print_r($this->request->getFile($img));
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(FCPATH . 'public/image/', $newName);
                $k = explode('-', $key);
                $subbanner[$k[1]]->image = $newName;
                $this->SubBanners->updateSubBanner(json_decode(json_encode($subbanner[$k[1]]), true), $k[1]);
            }
        }
        //  print_r($subbanner);die;
        foreach ($ok_img as $i => $ok) {
            if (!$ok && isset($subbanner[$i])) {
                $subbanner[$i]->image = "";
                $this->SubBanners->updateSubBanner(json_decode(json_encode($subbanner[$k[1]]), true), $i);
            }
        }
        
    }
}
