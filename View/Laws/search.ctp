<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo __('User Management'); ?></h1>
    </div>
</div>
<div class="">
    <?php echo $this->element('main_flash'); ?>
</div>
<div class="row">
    <div class="text-right">
    <?php echo $this->AclLink->link(
            '<span class="glyphicon glyphicon-plus"></span> '.__('Add'),
            array('admin' => true, 'action' => 'add'), 
            array('class' => 'btn btn-primary','escape' => false)); 
    ?>
    </div>
</div>
<div class="row">
    <p>
        <?php
        echo $this->Paginator->counter(array(
        'format' => __('{:start} - {:end} of {:count}')));
        ?>
    </p>
<?php 
        echo $this->Form->create('Laws', array(
                'url' => array(
                        'controller' => 'laws', 
                        'action' => 'search'
                ),
                'inputDefaults' => array(
                        'label' => false, 
                        'div' => false, 
                        'required' => false, 
                        'class' => 'form-control'
      )));
        echo $this->Form->input('TbLawdatum.search');

     //debug($laws);
        echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> Search', array('class' => 'btn btn-info')) ?>    
<table class="table table-striped table-bordered table-hover">
        <thead>
                <tr>
                        <th><?php echo $this->AwPaginator->sort('TbLawdatum.c_name', 'ฎีกาที่'); ?></th>
                        <th><?php echo $this->AwPaginator->sort('TbLawdatum.c_comment', 'มาตรา'); ?></th>
                        <th>View</th>
                        <th>Note</th>
                        <th>Bookmarks</th>
                </tr>
        </thead>
        <tbody>
                <?php if (empty($laws)): ?>
                <tr>
                    <td colspan="5" class="text-center">
                        <h4><?php echo __('Not found any contents.'); ?></h4>
                    </td>
                </tr>
                <?php else:?>
                <?php foreach ($laws as $law): ?>
                <tr>
                        <td><?php echo $this->Html->link(
                                                $law['TbLawdatum']['c_name'], 
                                                array(
                                                        'controller' => 'laws', 
                                                        'action' => 'view', 
                                                        'admin' => false, 
                                                        $law['TbLawdatum']['i_id']
                                                )); ?>
                        </td>
                        <td><?php echo h($law['TbLawdatum']['c_comment']); ?></td>
                        <td>View</td>
                        <td class="text-center active-col">Note</td>
                        <td class="actions-col"><?php 
				    				$label = $law['TbLawdatum']['c_name'];
				    				echo $this->AclLink->link(
				    					__('Bookmark'), 
				    					array('action' => 'bookmarkLaw', $law['TbLawdatum']['i_id']),
				    					array(),
				    					__('Are you sure you want to bookmarks %s?', $label)
			    					); 
			    				?></td>
                </tr>
                <?php 
                    endforeach; 
                    endif;
                ?>
        </tbody>
</table>
<?php echo $this->Form->end();?>
</div>
<div class="row">
    <?php echo $this->Paginator->pagination(array('ul' => 'pagination pagination-right')); ?>
</div>