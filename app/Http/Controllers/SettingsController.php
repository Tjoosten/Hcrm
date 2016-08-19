<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Config;

/**
 * Class SettingsController
 * @package App\Http\Controllers
 */
class SettingsController extends Controller
{
    /**
     * SettingsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get the change view for the backup settings.
     *
     * @url    GET: /settings/backup
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexBackup()
    {
        $data['StoreAllBackups']   = Config::get('laravel-backup.cleanup.defaultStrategy.keepAllBackupsForDays');
        $data['KeepDailyBackups']  = Config::get('laravel-backup.cleanup.defaultStrategy.keepDailyBackupsForDays');
        $data['WeeklyBackups']     = Config::get('laravel-backup.cleanup.defaultStrategy.keepWeeklyBackupsForWeeks');
        $data['MonthlyBackups']    = Config::get('laravel-backup.cleanup.defaultStrategy.keepMonthlyBackupsForMonths');
        $data['KeepYearlyBackups'] = Config::get('laravel-backup.cleanup.defaultStrategy.keepYearlyBackupsForYears');

        return view('settings.backup', $data);
    }

    /**
     * Get the change view for the application settings.
     *
     * @url    GET:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexApplication()
    {
        $data['tax'] = Config::get('crm.tax');
        return view('settings.application', $data);
    }

    /**
     * Store the backup settings.
     *
     * @url    POST: Settings/backup
     * @param  Requests\BackupSettingValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeBackup(Requests\BackupSettingValidator $input)
    {
        $config = new \Larapack\ConfigWriter\Repository('laravel-backup');
        $config->set('cleanup.defaultStrategy.keepAllBackupsForDays',       $input->keepAllBackupsForDaysAll);
        $config->set('cleanup.defaultStrategy.keepDailyBackupsForDays',     $input->keepAllBackupsForDays);
        $config->set('cleanup.defaultStrategy.keepWeeklyBackupsForWeeks',   $input->keepWeeklyBackupsForWeeks);
        $config->set('cleanup.defaultStrategy.keepMonthlyBackupsForMonths', $input->keepMonthlyBackupsForWeeks);
        $config->set('cleanup.defaultStrategy.keepYearlyBackupsForYears',   $input->keepAllBackupsYearly);
        $config->save();

        if ($config) {
            sleep(3);
            session()->flash('message', 'The backup settings has been updated.');
            session()->flash('class', 'alert-success');
        } else {
            session()->flash('message', 'The backup settings could not be updated.');
            session()->flash('class', 'alert-danger');
        }

        return redirect()->back();
    }

    /**
     * Store the application settings.
     *
     * @url    POST:
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeApplication(Requests\AppSettingsValidator $input)
    {
        $config = new \Larapack\ConfigWriter\Repository('crm');
        $config->set('tax', $input->tax);
        $config->save();

        if ($config) {
            session()->flash('message', 'Application settings has been updated');
            session()->flash('class', 'alert-success')
        } else {
            session()->flash('message', 'The application settings could not be updated');
            session()->flash('class', 'alert-danger');
        }

        return redirect()->back();
    }
}
