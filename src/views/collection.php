<?php if ($showLabel && $showField): ?>
<div <?= $options['wrapperAttrs'] ?> >
<?php endif; ?>

    <?php if ($showLabel && $options['label'] !== false): ?>
    <?= Form::label($name, $options['label'], $options['label_attr']) ?>
    <?php endif; ?>

    <?php if ($showField): ?>
        <?php foreach ((array)$options['children'] as $child): ?>
            <?= $child->render() ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($showError && isset($errors)): ?>
        <?= $errors->first(array_get($options, 'real_name', $name), '<div '.$options['errorAttrs'].'>:message</div>') ?>
    <?php endif; ?>

<?php if ($showLabel && $showField): ?>
</div>
<?php endif; ?>
