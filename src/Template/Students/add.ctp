<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-lg-10  " style=" margin-left: 30%;">
    <?= $this->Form->create($student) ?>
    
    <fieldset>

        <h3 style="text-align: center; "> ADD STUDENT</h3>
        <hr>
        <?php
            echo $this->Form->control('name',['class'=>'form form-inline']);
            echo $this->Form->control('email');
            echo $this->Form->control('mobile');
            echo $this->Form->control('branch');
            echo $this->Form->control('dob', ['label' => 'Date of birth', 'minYear' => date('Y') - 70,'maxYear' => date('Y') - 18,]);
        ?>
    </fieldset>
   <center> <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>    </center>
    <?= $this->Form->end() ?>
</div>
