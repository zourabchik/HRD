<?php

namespace App\Admin\Controllers;

use App\Models\Student;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StudentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Student';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('sex', __('Sex'));
        $grid->column('course', __('Course'));
        $grid->column('place_of_residence', __('Place of residence'));
        $grid->column('learning_conditions', __('Learning conditions'));
        $grid->column('enrollment_at', __('Date of enrollment'));
        $grid->column('graduation_at', __('Date of graduation'));
        $grid->column('deduction_at', __('Date of deductions'));
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
        $show = new Show(Student::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('sex', __('Sex'));
        $show->field('course', __('Course'));
        $show->field('place_of_residence', __('Place of residence'));
        $show->field('learning_conditions', __('Learning conditions'));
        $show->field('passport', __('Passport'))->image();
        $show->field('id_code', __('ID code'))->image();
        $show->field('residence_permit', __('Residence Permit'))->image();
        $show->field('military_certificate', __('Military certificate'))->image();
        $show->field('secondary_education_certificate', __('Certificate of completion of secondary education'))->image();
        $show->field('school_report_card', __('Report card from school'))->image();
        $show->field('training_contract', __('Training contract'))->image();
        $show->field('enrollment_at', __('Date of enrollment'));
        $show->field('graduation_at', __('Date of graduation'));
        $show->field('deduction_at', __('Date of deductions'));
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
        $form = new Form(new Student());

        $form->text('full_name', __('Full name'));
        $form->text('place_of_residence', __('Place of residence'));
        $form->text('course', __('Course'));
        $form->select('sex', __('Sex'))
            ->options(['male' => 'Male', 'female' => 'Female']);
        $form->select('learning_conditions', __('Learning conditions'))
            ->options(['contract' => 'Contract', 'budget' => 'Budget']);
        $form->image('passport', __('Passport'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->image('id_code', __('ID code'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->image('residence_permit', __('Residence Permit'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->image('military_certificate', __('Military certificate'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->image('secondary_education_certificate', __('Certificate of completion of secondary education'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->image('school_report_card', __('Report card from school'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->image('training_contract', __('Training contract'))
            ->move('/public/images/students/')
            ->uniqueName();
        $form->datetime('enrollment_at', __('Date of enrollment'))->default(date('Y-m-d H:i:s'));
        $form->datetime('graduation_at', __('Date of graduation'))->default(date('Y-m-d H:i:s'));
        $form->datetime('deduction_at', __('Date of deductions'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
