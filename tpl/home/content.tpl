<div class="header">
    <p>Header</p>
</div>
<div class="menu">
    <ul>
        {foreach from=$menu key="key" item="option"}
            <li>
                <a href="{$option['href']}">{$option['caption']}</a>
            </li>
            {/foreach}
    </ul>
</div>
    <div id="center" class="center">
        
    </div>