<!DOCTYPE html>
<html>
<head>
        {!! $theme->getSeo() !!}
        {!! $theme->loadStylesheets() !!}
</head>
 <body id="page-body">
        <div class="page-wrapper overflow-hidden">
            {!! $theme->getHeader() !!}
            <div style="margin-top: 200px;">
                {!! $theme->getPageContent() !!}
            </div>
          
            {!! $theme->getFooter() !!}
        </div>
</body>
{!! $theme->loadScripts() !!}
</html>

