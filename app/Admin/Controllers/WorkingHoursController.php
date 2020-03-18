<?php

namespace App\Admin\Controllers;

use App\Models\WorkingHours;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WorkingHoursController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var text
     */
    protected $title = 'WorkingHours';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WorkingHours());

        $grid->column('id', __('Id'));
        $grid->column('number_pp', __('Number pp'));
        $grid->column('tab_number', __('Tab number'));
        $grid->column('sex', __('Sex'));
        $grid->column('full_name', __('Full name'));
        $grid->column('position', __('Position'));
        $grid->column('marks', __('Marks'));
        $grid->column('total', __('Total'));
        $grid->column('overtime', __('Overtime'));
        $grid->column('nightly', __('Nightly'));
        $grid->column('evening', __('Evening'));
        $grid->column('weekend', __('Weekend'));
        $grid->column('holiday', __('Holiday'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(WorkingHours::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('number_pp', __('Number pp'));
        $show->field('tab_number', __('Tab number'));
        $show->field('sex', __('Sex'));
        $show->field('full_name', __('Full name'));
        $show->field('position', __('Position'));
        $show->field('marks', __('Marks'));
        $show->field('total', __('Total'));
        $show->field('overtime', __('Overtime'));
        $show->field('nightly', __('Nightly'));
        $show->field('evening', __('Evening'));
        $show->field('weekend', __('Weekend'));
        $show->field('holiday', __('Holiday'));
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
        $form = new Form(new WorkingHours());

        $form->tab('All', function ($form) {
            $form->number('total', __('Total'));
            $form->number('overtime', __('Overtime'));
            $form->number('nightly', __('Nightly'));
            $form->number('evening', __('Evening'));
            $form->number('weekend', __('Weekend'));
            $form->number('holiday', __('Holiday'));
        })->tab('Workers', function ($form) {

            $form->hasMany('workers', __('New Worker') , function (Form\NestedForm $form) {
                $form->number('number_pp', __('Number pp'));
                $form->number('tab_number', __('Tab number'));
                $form->select('sex', __('Sex'))
                    ->options(['male' => 'Male', 'female' => 'Female']);
                $form->text('full_name', __('Full name'));
                $form->text('position', __('Position'));
                $form->text('1');
                $form->text('2');
                $form->text('3');
                $form->text('4');
                $form->text('5');
                $form->text('6');
                $form->text('7');
                $form->text('8');
                $form->text('9');
                $form->text('10');
                $form->text('11');
                $form->text('12');
                $form->text('13');
                $form->text('14');
                $form->text('15');
                $form->text('16');
                $form->text('17');
                $form->text('18');
                $form->text('19');
                $form->text('20');
                $form->text('21');
                $form->text('22');
                $form->text('23');
                $form->text('24');
                $form->text('25');
                $form->text('26');
                $form->text('27');
                $form->text('28');
                $form->text('29');
                $form->text('30');
                $form->text('31');
            });
        });

        return $form;
    }
}
