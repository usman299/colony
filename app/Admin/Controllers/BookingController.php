<?php

namespace App\Admin\Controllers;

use App\Booking;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BookingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Booking';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Booking());

        $grid->column('id', __('Id'));
        $grid->column('property_id', __('Property id'));
        $grid->column('name', __('Name'));
        $grid->column('cnic', __('Cnic'));
        $grid->column('phone_no', __('Phone no'));
        $grid->column('date', __('Date'));
        $grid->column('descrption', __('Descrption'));
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
        $show = new Show(Booking::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('property_id', __('Property id'));
        $show->field('name', __('Name'));
        $show->field('cnic', __('Cnic'));
        $show->field('phone_no', __('Phone no'));
        $show->field('date', __('Date'));
        $show->field('descrption', __('Descrption'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Booking());

        $form->number('user_id', __('User id'));
        $form->number('property_id', __('Property id'));
        $form->text('name', __('Name'));
        $form->text('cnic', __('Cnic'));
        $form->text('phone_no', __('Phone no'));
        $form->text('date', __('Date'));
        $form->text('descrption', __('Descrption'));

        return $form;
    }
}
