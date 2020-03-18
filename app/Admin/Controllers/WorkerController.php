<?php

namespace App\Admin\Controllers;

use App\Models\Worker;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WorkerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Worker';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Worker());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('sex', __('Sex'));
        $grid->column('place_of_residence', __('Place of residence'));
        $grid->column('position', __('Position'));
        $grid->column('attestation', __('Attestation'));
        $grid->column('specialty_accreditation', __('Specialty accreditation'));
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
        $show = new Show(Worker::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('sex', __('Sex'));
        $show->birth_certificate_of_the_childs()
            ->as(function ($images) {
                $html = '';

                foreach ($images as $image) {
                    $path = explode('/', $image);
                    $path = asset('/storage/images/workers/' . end($path));
                    $html .= "<img src='$path' alt='' style='max-width: 200px;max-height: 200px;'>";
                }

                return $html;
            })->unescape();
        $show->field('employment_contract', __('Employment contract'))->image();
        $show->field('employment_order', __('Employment order'))->image();
        $show->field('residence_permit', __('Residence Permit'))->image();
        $show->field('place_of_residence', __('Place of residence'));
        $show->field('position', __('Position'));
        $show->field('attestation', __('Attestation'));
        $show->field('specialty_accreditation', __('Specialty accreditation'));
        $show->field('contract', __('Contract'))->image();
        $show->field('employees_are_retired', __('Employees are retired'))->image();
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
        $form = new Form(new Worker());

        $form->text('full_name', __('Full name'));
        $form->text('place_of_residence', __('Place of residence'));
        $form->text('position', __('Position'));
        $form->select('sex', __('Sex'))
            ->options(['male' => 'Male', 'female' => 'Female']);
        $form->image('employment_contract', __('Employment contract'))
            ->move('/public/images/workers/')
            ->uniqueName();;
        $form->image('employment_order', __('Employment order'))
            ->move('/public/images/workers/')
            ->uniqueName();
        $form->image('residence_permit', __('Residence Permit'))
            ->move('/public/images/workers/')
            ->uniqueName();
        $form->image('contract', __('Contract'))
            ->move('/public/images/workers/')
            ->uniqueName();
        $form->image('employees_are_retired', __('Employees are retired'))
            ->move('/public/images/workers/')
            ->uniqueName();
        $form->multipleImage('birth_certificate_of_the_childs', __('Birth certificate of the childs'))
            ->move('/public/images/workers/')
            ->uniqueName();
        $form->datetime('attestation', __('Attestation'))
            ->default(date('Y-m-d H:i:s'));
        $form->datetime('specialty_accreditation', __('Specialty accreditation'))
            ->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
