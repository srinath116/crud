<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3 style="text-align:  center;"> <?= h($student->name) ?></h3>
    <table class="vertical-table  table table-striped">
        <tr>
            <th scope="row">id</th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
        <tr>
            <th scope="row">name</th>
            <td><?= h($student->name) ?></td>
        </tr>
        <tr>
            <th scope="row">dob</th>
            <td><?= h($student->dob) ?></td>
        </tr>
        <tr>
            <th scope="row">email</th>
            <td><?= h($student->email) ?></td>
        </tr>
        <tr>
            <th scope="row">mobile</th>
            <td><?= h($student->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row">branch</th>
            <td><?= h($student->branch) ?></td>
        </tr>
        
        
    </table>
</div>
