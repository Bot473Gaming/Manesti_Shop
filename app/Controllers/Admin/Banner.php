<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_Banners;

class Banner extends BaseController
{
    public function __construct()
    {
        $this->Banners     = new Model_Banners();
    }
    public function index()
    {
        // all, waiting, shipping, delivered, cancel
        $banner     = $this->Banners->getAllBanners();
        if (!$banner) {
            $banner = [
                // (object)[
                //     'image' => ''
                // ]
            ];
        }
        $data   = [
            'title'     => 'Banner',
            'page'      => 'banner',
            'data'      => [
                'banner' => $banner,
            ],
        ];
        return view('admin/layout', $data);
    }
    public function update()
    {
        $banner     = $this->Banners->getAllBanners();
        if (!$banner) {
            $banner = [
                // (object)[
                //     'image' => ''
                // ]
            ];
        }
        $ok_img     = json_decode($_POST['ok-img']);

        $dl = [];
        $config['max_size'] = '1000000';
        $imagefile = $this->request->getFiles();
        foreach ($imagefile as $key => $img) {
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(FCPATH . 'public/image/', $newName);
                $k = explode('-', $key);
                if (isset($banner[$k[1]])) {
                    $banner[$k[1]]->image = $newName;
                } else {
                    $this->Banners->createBanner(['image' => $newName]);
                }
            }
        }
        foreach ($ok_img as $i => $ok) {
            if (!$ok && isset($banner[$i])) {
                $banner[$i]->image = "";
            }
        }
        foreach ($banner as $i => $pd) {
            // print_r($pd->image);
            if ($pd->image == "") {
                $this->Banners->deleteBanner($pd->_id);
            } else {
                $this->Banners->updateBanner(json_decode(json_encode($pd), true), $pd->_id);
            }
        }
    }
}
