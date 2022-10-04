<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OrderExportStatus implements FromCollection, WithHeadings, ShouldAutoSize
{
    public function headings(): array
    {
        return [
            'No',
            'Code',
            'Fullname',
            'Address',
            'Phone',
            'Note',
            'Status',
            'Total',
            'Created_at',
            'Updated_at',
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        // $status = Order::get('status');
        // dd($status->status);
        // $orders = Order::whereget();
        // foreach ($orders as $order) {
        //     if ($order->status) {
        //         $row[] = array(
        //             '0' => $order->id,
        //             '1' => $order->code,
        //             '2' => $order->fullname,
        //             '3' => $order->address,
        //             '4' => $order->phone,
        //             '5' => $order->note,
        //             '6' => 'New',
        //             '7' => number_format($order->total,0,',',',').' VNĐ',
        //             '8' => $order->created_at,
        //             '9' => $order->updated_at
        //         );

        //         $row[] = array(
        //             '0' => $order->id,
        //             '1' => $order->code,
        //             '2' => $order->fullname,
        //             '3' => $order->address,
        //             '4' => $order->phone,
        //             '5' => $order->note,
        //             '6' => 'In progress',
        //             '7' => number_format($order->total,0,',',',').' VNĐ',
        //             '8' => $order->created_at,
        //             '9' => $order->updated_at
        //         );
        //         break;
        //     case '2':
        //         $row[] = array(
        //             '0' => $order->id,
        //             '1' => $order->code,
        //             '2' => $order->fullname,
        //             '3' => $order->address,
        //             '4' => $order->phone,
        //             '5' => $order->note,
        //             '6' => 'Buyer cancel',
        //             '7' => number_format($order->total,0,',',',').' VNĐ',
        //             '8' => $order->created_at,
        //             '9' => $order->updated_at
        //         );
        //         break;
        //     case '3':
        //         $row[] = array(
        //             '0' => $order->id,
        //             '1' => $order->code,
        //             '2' => $order->fullname,
        //             '3' => $order->address,
        //             '4' => $order->phone,
        //             '5' => $order->note,
        //             '6' => 'Admin cancel',
        //             '7' => number_format($order->total,0,',',',').' VNĐ',
        //             '8' => $order->created_at,
        //             '9' => $order->updated_at
        //         );
        //         break;
        //     default:
        //         $row[] = array(
        //             '0' => $order->id,
        //             '1' => $order->code,
        //             '2' => $order->fullname,
        //             '3' => $order->address,
        //             '4' => $order->phone,
        //             '5' => $order->note,
        //             '6' => "Done",
        //             '7' => number_format($order->total,0,',',',').' VNĐ',
        //             '8' => $order->created_at,
        //             '9' => $order->updated_at
        //         );
        //     }
        // }
        // return (collect($row));
    }
}
