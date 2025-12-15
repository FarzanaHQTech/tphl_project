<?php

namespace SiteManage;

use Controller;
use SiteSetting;

class SiteSettingController extends Controller
{
    protected $siteSettingModel;

    public function __construct($db)
    {
        $this->siteSettingModel = new SiteSetting($db);
    }

    // Load settings page with existing data
 public function index()
{
    $settings = $this->siteSettingModel->getFirst(); // get first row or null
    $this->view("site-manage/settings/site-settings", [
        "page_title" => "Site Settings",
        "settings" => $settings // এখানে settings হিসেবে পাঠাচ্ছি
    ]);
}


    // Handle both create and update
    public function storeOrUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;

            // Check if settings already exist
            $existing = $this->siteSettingModel->getFirst();

            try {
                if ($existing) {
                    // Update existing
                    $this->siteSettingModel->update($existing['id'], $data, 'logo');
                    setSuccess("Settings updated successfully!");
                } else {
                    // Create new
                    $this->siteSettingModel->create($data, 'logo');
                    setSuccess("Settings created successfully!");
                }

                header("Location: {$GLOBALS['base_url']}/site-settings");
                exit;
            } catch (\Throwable $th) {
                setError($th->getMessage());
                header("Location: {$GLOBALS['base_url']}/site-settings");
                exit;
            }
        }
    }
}
