<?php

namespace App\Admin\Controllers;

use App\Property;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PropertyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Property';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Property());

        $grid->column('id', __('Id'));
        $grid->column('ownername', __('Ownername'));
        $grid->column('id_card', __('Id card'));
        $grid->column('email', __('Email'));
        $grid->column('mobile_no', __('Mobile no'));
        $grid->column('plot_status')->display(function () {
            $order = Property::find($this->id);
            if ($order->plot_status == 1){
                return "Plot";
            }else {
                return "Home";
            }
        });
        $grid->column('property_status')->display(function () {
            $order = Property::find($this->id);
            if ($order->property_status == 0){
                return "Static";
            }else if ($order->property_status == 1){
                return "Sold";
            }else if($order->property_status == 2){
                return "Rent";
            }else {
                return "Resale";
            }
        });
        $grid->column('block', __('Block'));
        $grid->column('land_size', __('Land size'));
        $grid->column('land_prize', __('Land prize'));

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
        $show = new Show(Property::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ownername', __('Ownername'));
        $show->field('id_card', __('Id card'));
        $show->field('email', __('Email'));
        $show->field('mobile_no', __('Mobile no'));
        $show->field('picture_owner', __('Picture owner'));
        $show->field('images', __('Property Picture'));
        $show->field('picture_id_card', __('Picture id card'));
        $show->field('plot_status', __('Plot status'));
        $show->field('property_status', __('Property status'));
        $show->field('block', __('Block'));
        $show->field('description', __('Description'));
        $show->field('land_size', __('Land size'));
        $show->field('land_prize', __('Land prize'));
        $show->field('bed_room', __('Bed room'));
        $show->field('drawing_room', __('Drawing room'));
        $show->field('washroom', __('Washroom'));
        $show->field('gerages', __('Gerages'));
        $show->field('home_floor', __('Home floor'));
        $show->field('kitchen', __('Kitchen'));
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
        $form = new Form(new Property());

        $form->text('ownername', __('Ownername'));
        $form->text('id_card', __('Id card'));
        $form->email('email', __('Email'));
        $form->text('mobile_no', __('Mobile no'));
        $form->image('picture_owner', __('Picture owner'));
        $form->image('images', __('Property Picture'));
        $form->image('picture_id_card', __('Picture id card'));
        $directors = [
            1  => 'Plot',
            2 => 'Home',
        ];
        $form->select('plot_status', 'Plot status')->options($directors);
        $directors1 = [
            0 =>  'Static',
            1  => 'Sold',
            2 => 'Rent',
            3  => 'Resale',
        ];
        $form->select('property_status', 'Property status')->options($directors1);

        $form->text('block', __('Block'));
        $form->textarea('description', __('Description'));
        $form->decimal('land_size', __('Land size'));
        $form->decimal('land_prize', __('Land prize'));
        $form->text('bed_room', __('Bed room'));
        $form->text('drawing_room', __('Drawing room'));
        $form->text('washroom', __('Washroom'));
        $form->text('gerages', __('Gerages'));
        $form->text('home_floor', __('Home floor'));
        $form->text('kitchen', __('Kitchen'));

        return $form;
    }
}
