<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManagerList;
class ManagerListController extends Controller
{
    public function get(Request $request)
    {
        $users = ManagerList::All();
        //все это добро по примеру выше нужно брать из бд, заполнять бд мне лень        
        $data = [
            [
                "manager" => "test1",
                "salary" => 35000,
                "plan" => 300000,
                "Дата" => (new \DateTime('now'))->format('d.m.Y'),
                "количество дней в месяце" => 31,
                "Количество дней отработано" => 22,
                "ЗП с посещения работы" => "20,681.82",
                "прибавка за звонки"=> "20,000.00",
            ],
            [
                "manager" => "test2",
                "salary" => 10000,
                "plan" =>300000,
                "Дата" => (new \DateTime('now'))->format('d.m.Y'),
                "количество дней в месяце" => 31,
                "Количество дней отработано" => 22,
                "ЗП с посещения работы" => "2,727.27",
                "прибавка за звонки"=> "10,000.00",
            ],
            [
                "manager" => "test1",
                "salary" => 35000,
                "plan" => 300000,
                "Дата" => (new \DateTime('now'))->format('d.m.Y'),
                "количество дней в месяце" => 31,
                "Количество дней отработано" => 22,
                "ЗП с посещения работы" => "20,681.82",
                "прибавка за звонки"=> "20,000.00",
            ]
        ];
        return view('manager_list', ["data"=>$data]);
    }
}
