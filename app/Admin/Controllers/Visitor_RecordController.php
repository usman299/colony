<?php

namespace App\Admin\Controllers;

use App\Visitor_Record;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Visitor_RecordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Visitor_Record';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Visitor_Record());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('cnic', __('Cnic'));
        $grid->column('vehicle_number', __('Vehicle number'));
        $grid->column('vehicle_type', __('Vehicle type'));
        $grid->column('vehicle_destination', __('Vehicle destination'));
        $grid->column('created_at', __('Created at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Visitor_Record::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('cnic', __('Cnic'));
        $show->field('vehicle_number', __('Vehicle number'));
        $show->field('vehicle_type', __('Vehicle type'));
        $show->field('vehicle_destination', __('Vehicle destination'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->panel()->tools(function ($tools) use ($id) {

            $tools->append('<div class="btn-group pull-right" style="margin-right: 5px"><a href="' . url('admin/invoices-print', $id) . '" target="_blank" class="btn btn-sm btn-primary" title="Print"><i class="fa fa-print"></i><span class="hidden-xs">  Print</span></a></div>');

        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Visitor_Record());

        $form->text('name', __('Name'));
        $form->text('cnic', __('Cnic'));
        $form->text('vehicle_number', __('Vehicle number'));
        $form->text('vehicle_type', __('Vehicle type'));
        $form->text('vehicle_destination', __('Vehicle destination'));

        return $form;
    }
    public function printInvoice($id)
    {
        $data = Visitor_Record::find($id);
        return view('card', compact('data'));
    }
}
