<?php
if (!function_exists('_35e41a9f31e534074e2f0124922909c5')):
function _35e41a9f31e534074e2f0124922909c5($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>
<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'right',
    'tooltipKbd' => null,
    'tooltip' => null,
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'badgeColor' => null,
    'iconDot' => null,
    'accent' => true,
    'badge' => null,
    'icon' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$badgeColor ??= $attributes['badge-color'] ?? $attributes['badgeColor'] ?? $__defaults['badgeColor']; unset($attributes['badgeColor'], $attributes['badge-color']);
$iconDot ??= $attributes['icon-dot'] ?? $attributes['iconDot'] ?? $__defaults['iconDot']; unset($attributes['iconDot'], $attributes['icon-dot']);
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php
// Slots contain rendered HTML (including conditional comments) and encoded entities.
// Tooltips should mirror only the visible text.
$tooltip ??= $slot->isNotEmpty()
    ? trim(html_entity_decode(strip_tags((string) $slot), ENT_QUOTES | ENT_HTML5, 'UTF-8'))
    : null;

// Size-up icons in square/icon-only buttons...
$iconClasses = Flux::classes('size-4')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-400! dark:in-data-flux-sidebar-group-dropdown:text-white/80!')
    ->add('[[data-flux-sidebar-item]:hover_&]:text-current!')
    ->add('[[data-flux-sidebar-item][data-active]_&]:text-current!');

$classes = Flux::classes()
    ->add('h-8 in-data-flux-sidebar-on-mobile:h-10 relative flex items-center gap-3 rounded-lg')
    ->add('in-data-flux-sidebar-collapsed-desktop:w-10 in-data-flux-sidebar-collapsed-desktop:justify-center')
    ->add('py-0 text-start w-full px-3 has-data-flux-navlist-badge:not-in-data-flux-sidebar-collapsed-desktop:pe-1.5 my-px')
    ->add('text-zinc-500 dark:text-white/80')
    ->add(match ($accent) {
        true => [
            'data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content)',
            'data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent',
            'hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5 ',
            'border border-transparent',
        ],
        false => [
            'data-current:text-zinc-800 dark:data-current:text-zinc-100 data-current:border-zinc-200',
            'data-current:bg-white dark:data-current:bg-white/10 data-current:border data-current:border-zinc-200 dark:data-current:border-white/10 data-current:shadow-xs',
            'hover:text-zinc-800 dark:hover:text-white',
        ],
    })
    // Override the default styles to match dropdowns for when the item is inside a collapsed group dropdown...
    ->add('in-data-flux-sidebar-group-dropdown:w-auto! in-data-flux-sidebar-group-dropdown:px-2!')
    ->add('in-data-flux-sidebar-group-dropdown:focus:outline-hidden!')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-800! in-data-flux-sidebar-group-dropdown:bg-white! in-data-flux-sidebar-group-dropdown:hover:bg-zinc-50!')
    ->add('in-data-flux-sidebar-group-dropdown:data-active:bg-zinc-50!')
    ->add('dark:in-data-flux-sidebar-group-dropdown:text-white! dark:in-data-flux-sidebar-group-dropdown:bg-transparent! dark:in-data-flux-sidebar-group-dropdown:hover:bg-zinc-600! dark:in-data-flux-sidebar-group-dropdown:data-active:bg-zinc-600!')
    ;
?>

<?php if (!function_exists('_afd405c0cb409688ebeab2431b98966c')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/afd405c0cb409688ebeab2431b98966c.php'); require $__blaze->compiledPath.'/afd405c0cb409688ebeab2431b98966c.php'; } ?>
<?php if (isset($__slotsafd405c0cb409688ebeab2431b98966c)) { $__slotsStackafd405c0cb409688ebeab2431b98966c[] = $__slotsafd405c0cb409688ebeab2431b98966c; } ?>
<?php if (isset($__attrsafd405c0cb409688ebeab2431b98966c)) { $__attrsStackafd405c0cb409688ebeab2431b98966c[] = $__attrsafd405c0cb409688ebeab2431b98966c; } ?>
<?php $__attrsafd405c0cb409688ebeab2431b98966c = ['position' => $tooltipPosition,'class' => 'block min-w-0']; ?>
<?php $__slotsafd405c0cb409688ebeab2431b98966c = []; ?>
<?php $__blaze->pushData($__attrsafd405c0cb409688ebeab2431b98966c); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_e89dc7cffd5a9ee5e364eac5582f5563')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/button-or-link.blade.php', $__blaze->compiledPath.'/e89dc7cffd5a9ee5e364eac5582f5563.php'); require $__blaze->compiledPath.'/e89dc7cffd5a9ee5e364eac5582f5563.php'; } ?>
<?php if (isset($__slotse89dc7cffd5a9ee5e364eac5582f5563)) { $__slotsStacke89dc7cffd5a9ee5e364eac5582f5563[] = $__slotse89dc7cffd5a9ee5e364eac5582f5563; } ?>
<?php if (isset($__attrse89dc7cffd5a9ee5e364eac5582f5563)) { $__attrsStacke89dc7cffd5a9ee5e364eac5582f5563[] = $__attrse89dc7cffd5a9ee5e364eac5582f5563; } ?>
<?php $__attrse89dc7cffd5a9ee5e364eac5582f5563 = ['attributes' => $attributes->class($classes),'dataFluxSidebarItem' => true]; ?>
<?php $__slotse89dc7cffd5a9ee5e364eac5582f5563 = []; ?>
<?php $__blaze->pushData($__attrse89dc7cffd5a9ee5e364eac5582f5563); ?>
<?php ob_start(); ?>
        <?php if ($icon): ?>
            <div class="relative">
                <?php if (is_string($icon) && $icon !== ''): ?>
                    <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                <?php else: ?>
                    <?php echo e($icon); ?>

                <?php endif; ?>

                <?php if ($iconDot): ?>
                    <div class="absolute top-[-2px] end-[-2px]">
                        <div class="size-[6px] rounded-full bg-zinc-500 dark:bg-zinc-400"></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($slot->isNotEmpty()): ?>
            <div class="
                in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden
                flex-1 text-sm font-medium truncate [[data-nav-footer]_&]:hidden [[data-nav-sidebar]_[data-nav-footer]_&]:block" data-content><?php echo e($slot); ?></div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        <?php elseif ($iconTrailing): ?>
            <?php echo e($iconTrailing); ?>

        <?php endif; ?>

        <?php if (isset($badge) && $badge !== ''): ?>
            <?php $badgeAttributes = Flux::attributesAfter('badge:', $attributes, ['color' => $badgeColor]); ?>
            <?php if (!function_exists('_9676a29cb117df9034fae0f40e384551')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/badge.blade.php', $__blaze->compiledPath.'/9676a29cb117df9034fae0f40e384551.php'); require $__blaze->compiledPath.'/9676a29cb117df9034fae0f40e384551.php'; } ?>
<?php if (isset($__slots9676a29cb117df9034fae0f40e384551)) { $__slotsStack9676a29cb117df9034fae0f40e384551[] = $__slots9676a29cb117df9034fae0f40e384551; } ?>
<?php if (isset($__attrs9676a29cb117df9034fae0f40e384551)) { $__attrsStack9676a29cb117df9034fae0f40e384551[] = $__attrs9676a29cb117df9034fae0f40e384551; } ?>
<?php $__attrs9676a29cb117df9034fae0f40e384551 = ['attributes' => $badgeAttributes,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden']; ?>
<?php $__slots9676a29cb117df9034fae0f40e384551 = []; ?>
<?php $__blaze->pushData($__attrs9676a29cb117df9034fae0f40e384551); ?>
<?php ob_start(); ?><?php echo e($badge); ?><?php $__slots9676a29cb117df9034fae0f40e384551['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots9676a29cb117df9034fae0f40e384551); ?>
<?php _9676a29cb117df9034fae0f40e384551($__blaze, $__attrs9676a29cb117df9034fae0f40e384551, $__slots9676a29cb117df9034fae0f40e384551, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack9676a29cb117df9034fae0f40e384551)) { $__slots9676a29cb117df9034fae0f40e384551 = array_pop($__slotsStack9676a29cb117df9034fae0f40e384551); } ?>
<?php if (! empty($__attrsStack9676a29cb117df9034fae0f40e384551)) { $__attrs9676a29cb117df9034fae0f40e384551 = array_pop($__attrsStack9676a29cb117df9034fae0f40e384551); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotse89dc7cffd5a9ee5e364eac5582f5563['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotse89dc7cffd5a9ee5e364eac5582f5563); ?>
<?php _e89dc7cffd5a9ee5e364eac5582f5563($__blaze, $__attrse89dc7cffd5a9ee5e364eac5582f5563, $__slotse89dc7cffd5a9ee5e364eac5582f5563, ['attributes', 'dataFluxSidebarItem'], ['dataFluxSidebarItem' => 'data-flux-sidebar-item'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacke89dc7cffd5a9ee5e364eac5582f5563)) { $__slotse89dc7cffd5a9ee5e364eac5582f5563 = array_pop($__slotsStacke89dc7cffd5a9ee5e364eac5582f5563); } ?>
<?php if (! empty($__attrsStacke89dc7cffd5a9ee5e364eac5582f5563)) { $__attrse89dc7cffd5a9ee5e364eac5582f5563 = array_pop($__attrsStacke89dc7cffd5a9ee5e364eac5582f5563); } ?>
<?php $__blaze->popData(); ?>

    <?php if (!function_exists('_40a07610d385bb7f8f4343b7e7af88b3')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/40a07610d385bb7f8f4343b7e7af88b3.php'); require $__blaze->compiledPath.'/40a07610d385bb7f8f4343b7e7af88b3.php'; } ?>
<?php if (isset($__slots40a07610d385bb7f8f4343b7e7af88b3)) { $__slotsStack40a07610d385bb7f8f4343b7e7af88b3[] = $__slots40a07610d385bb7f8f4343b7e7af88b3; } ?>
<?php if (isset($__attrs40a07610d385bb7f8f4343b7e7af88b3)) { $__attrsStack40a07610d385bb7f8f4343b7e7af88b3[] = $__attrs40a07610d385bb7f8f4343b7e7af88b3; } ?>
<?php $__attrs40a07610d385bb7f8f4343b7e7af88b3 = ['kbd' => $tooltipKbd,'class' => 'not-in-data-flux-sidebar-collapsed-desktop:hidden in-data-flux-sidebar-group-dropdown:hidden cursor-default']; ?>
<?php $__slots40a07610d385bb7f8f4343b7e7af88b3 = []; ?>
<?php $__blaze->pushData($__attrs40a07610d385bb7f8f4343b7e7af88b3); ?>
<?php ob_start(); ?>
        <?php echo e($tooltip); ?>

    <?php $__slots40a07610d385bb7f8f4343b7e7af88b3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots40a07610d385bb7f8f4343b7e7af88b3); ?>
<?php _40a07610d385bb7f8f4343b7e7af88b3($__blaze, $__attrs40a07610d385bb7f8f4343b7e7af88b3, $__slots40a07610d385bb7f8f4343b7e7af88b3, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack40a07610d385bb7f8f4343b7e7af88b3)) { $__slots40a07610d385bb7f8f4343b7e7af88b3 = array_pop($__slotsStack40a07610d385bb7f8f4343b7e7af88b3); } ?>
<?php if (! empty($__attrsStack40a07610d385bb7f8f4343b7e7af88b3)) { $__attrs40a07610d385bb7f8f4343b7e7af88b3 = array_pop($__attrsStack40a07610d385bb7f8f4343b7e7af88b3); } ?>
<?php $__blaze->popData(); ?>
<?php $__slotsafd405c0cb409688ebeab2431b98966c['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsafd405c0cb409688ebeab2431b98966c); ?>
<?php _afd405c0cb409688ebeab2431b98966c($__blaze, $__attrsafd405c0cb409688ebeab2431b98966c, $__slotsafd405c0cb409688ebeab2431b98966c, ['position'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackafd405c0cb409688ebeab2431b98966c)) { $__slotsafd405c0cb409688ebeab2431b98966c = array_pop($__slotsStackafd405c0cb409688ebeab2431b98966c); } ?>
<?php if (! empty($__attrsStackafd405c0cb409688ebeab2431b98966c)) { $__attrsafd405c0cb409688ebeab2431b98966c = array_pop($__attrsStackafd405c0cb409688ebeab2431b98966c); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/item.blade.php ENDPATH**/ ?>