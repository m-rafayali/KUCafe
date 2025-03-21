<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Order;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());
        /*
        how many columns to show as fixed. First three and last two are fixed
        */
        $grid->fixColumns(3, -2);
        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('order_amount', __('Order amount'));
        $grid->column('payment_status', __('Payment status'));
        $grid->column('order_status', __('Order status'));
        $grid->column('confirmed', __('Confirmed'));
        $grid->column('accepted', __('Accepted'));
        $grid->column('scheduled', __('Scheduled'));
        $grid->column('processing', __('Processing'));
        $grid->column('handover', __('Handover'));
        $grid->column('failed', __('Failed'));
        $grid->column('scheduled_at', __('Scheduled at'));
        $grid->column('delivery_address_id', __('Delivery address id'));
        $grid->column('order_note', __('Order note'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('delivery_charge', __('Delivery charge'));
        $grid->column('delivery_address', __('Delivery address'))->limit(50);
        $grid->column('otp', __('Otp'));
        $grid->column('pending', __('Pending'));
        $grid->column('picked_up', __('Picked up'));
        $grid->column('delivered', __('Delivered'));
        $grid->column('canceled', __('Canceled'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('order_amount', __('Order amount'));
        $show->field('payment_status', __('Payment status'));
        $show->field('order_status', __('Order status'));
        $show->field('confirmed', __('Confirmed'));
        $show->field('accepted', __('Accepted'));
        $show->field('scheduled', __('Scheduled'));
        $show->field('processing', __('Processing'));
        $show->field('handover', __('Handover'));
        $show->field('failed', __('Failed'));
        $show->field('scheduled_at', __('Scheduled at'));
        $show->field('delivery_address_id', __('Delivery address id'));
        $show->field('order_note', __('Order note'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('delivery_charge', __('Delivery charge'));
        $show->field('delivery_address', __('Delivery address'));
        $show->field('otp', __('Otp'));
        $show->field('pending', __('Pending'));
        $show->field('picked_up', __('Picked up'));
        $show->field('delivered', __('Delivered'));
        $show->field('canceled', __('Canceled'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->text('user_id', __('User id'))->disable();
        $form->decimal('order_amount', __('Order amount'))->readonly();
        $form->text('payment_status', __('Payment status'))->default('pending');
        $form->text('order_status', __('Order status'))->default('pending');
        $form->datetime('confirmed', __('Confirmed'))->default(date('Y-m-d H:i:s'));
        $form->datetime('accepted', __('Accepted'))->default(date('Y-m-d H:i:s'));
        $form->switch('scheduled', __('Scheduled'));
        $form->datetime('processing', __('Processing'))->default(date('Y-m-d H:i:s'));
        $form->datetime('handover', __('Handover'))->default(date('Y-m-d H:i:s'));
        $form->datetime('failed', __('Failed'))->default(date('Y-m-d H:i:s'));
        $form->datetime('scheduled_at', __('Scheduled at'))->default(date('Y-m-d H:i:s'));
        $form->number('delivery_address_id', __('Delivery address id'))->readonly();
        $form->textarea('order_note', __('Order note'));
        $form->decimal('delivery_charge', __('Delivery charge'));
        $form->textarea('delivery_address', __('Delivery address'))->readonly();
        $form->text('otp', __('Otp'));
        $form->datetime('pending', __('Pending'))->default(date('Y-m-d H:i:s'));
        $form->datetime('picked_up', __('Picked up'))->default(date('Y-m-d H:i:s'));
        $form->datetime('delivered', __('Delivered'))->default(date('Y-m-d H:i:s'));
        $form->datetime('canceled', __('Canceled'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
