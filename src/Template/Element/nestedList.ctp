<li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" data-row-id="<?= $item->id ?>" id="menuItem_<?= $item->id ?>">
    <div class="menuDiv">
        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span> <?= $item->title ?>
    </div>
    <?php if(!is_null($item->children) && count($item->children) > 0): ?>
    <ol>
        <?php foreach($item->children as $itemChild): ?>
            <?= $this->element('nestedList', ['item' => $itemChild]);?>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>
</li>
