<?php

namespace App\Admin\Controllers;

use App\complain;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ComplainController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'complain';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new complain());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('title', __('Title'));
        $grid->column('descripion', __('Descripion'));
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
        $show = new Show(complain::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('email', __('Email'));
        $show->field('title', __('Title'));
        $show->field('descripion', __('Descripion'));
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
        $form = new Form(new complain());

        $form->number('user_id', __('User id'));
        $form->email('email', __('Email'));
        $form->text('title', __('Title'));
        $form->text('descripion', __('Descripion'));

        return $form;
    }
}
