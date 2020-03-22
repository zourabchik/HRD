<?php

namespace App\Admin\Controllers;

use App\Models\WorkingHoursWorkers;
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
        $grid = new Grid(new WorkingHoursWorkers());

        $grid->column('id', __('Id'));
        $grid->column('number_pp', __('Number pp'));
        $grid->column('tab_number', __('Tab number'));
        $grid->column('sex', __('Sex'));
        $grid->column('full_name', __('Full name'));
        $grid->column('position', __('Position'));
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
        $show = new Show(WorkingHoursWorkers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('number_pp', __('Number pp'));
        $show->field('tab_number', __('Tab number'));
        $show->field('sex', __('Sex'));
        $show->field('full_name', __('Full name'));
        $show->field('position', __('Position'));
        $show->field('1');
            $show->field('2');
            $show->field('3');
            $show->field('4');
            $show->field('5');
            $show->field('6');
            $show->field('7');
            $show->field('8');
            $show->field('9');
            $show->field('10');
            $show->field('11');
            $show->field('12');
            $show->field('13');
            $show->field('14');
            $show->field('15');
            $show->field('16');
            $show->field('17');
            $show->field('18');
            $show->field('19');
            $show->field('20');
            $show->field('21');
            $show->field('22');
            $show->field('23');
            $show->field('24');
            $show->field('25');
            $show->field('26');
            $show->field('27');
            $show->field('28');
            $show->field('29');
            $show->field('30');
            $show->field('31');
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
        $form = new Form(new WorkingHoursWorkers());

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

        return $form;
    }
}
