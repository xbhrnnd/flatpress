{include file="cpheader.tpl"}
<div id="cpmain">
  <div class="entry">
    <div class="admin-header">
      <div class="admin-header-title">
        <img class="admin-header-svg" src="./fp-interface/themes/noraeza/noraeza/imgs/controlpanel.svg" title={$subject}/>
        <h1>{$subject}</h1>
      </div>
      <ul id="admin-small-nav">
        <li>
          <img class="admin-small-nav-svg" src="./fp-interface/themes/noraeza/noraeza/imgs/home.svg" title={$lang.admin.general.startpage}/>
          <a href="{$smarty.const.BLOG_BASEURL}">{$lang.admin.general.startpage}</a>
        </li>
        <li>
          <img class="admin-small-nav-svg" src="./fp-interface/themes/noraeza/noraeza/imgs/logout.svg" title={$lang.admin.general.logout}/>
          <a href="{$smarty.const.BLOG_BASEURL}login.php?do=logout">{$lang.admin.general.logout}</a>
        </li>
      </ul>
    </div>
    {page}
      <div class="body">{controlpanel}</div>
    {/page}
  </div>
</div>
{include file="footer.tpl"}
