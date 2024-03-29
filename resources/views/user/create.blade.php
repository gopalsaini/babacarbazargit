@extends('layouts.app')
@push('custom_css')

<style>
.krajee-default.file-preview-frame:hover:not(.file-preview-error) {
    box-shadow: 0 0 5px 0 #666666;
}

.file-loading:before {
    content: " Loading...";
}
</style>
<style>
/* Avatar Upload */
.photo-field {
    display: inline-block;
    vertical-align: middle;
}

.photo-field .krajee-default.file-preview-frame,
.photo-field .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}

.photo-field .file-input {
    display: table-cell;
    width: 150px;
}

.photo-field .krajee-default.file-preview-frame .kv-file-content {
    width: 150px;
    height: 160px;
}

.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}

.file-preview {
    padding: 2px;
}

.file-drop-zone {
    margin: 2px;
    min-height: 100px;
}

.file-drop-zone .file-preview-thumbnails {
    cursor: pointer;
}

.krajee-default.file-preview-frame .file-thumbnail-footer {
    height: 30px;
}

/* Allow clickable uploaded photos (Not possible) */
.file-drop-zone {
    padding: 20px;
}

.file-drop-zone .kv-file-content {
    padding: 0
}
</style>
<style type="text/css">
/* === v9.0.1 === */
/* === Body === */
@media (min-width: 1200px) {
    .container {
        max-width: 1200px;
    }
}

/* === Header === */
.navbar.navbar-site {
    position: fixed !important;
}

#wrapper {
    padding-top: 65px;
}

.navbar.navbar-site .navbar-identity .navbar-brand {
    height: 60px;
    padding-top: 10px;
    padding-bottom: 10px;
}

@media (max-width: 767px) {
    #wrapper {
        padding-top: 61px;
    }

    .navbar-site.navbar .navbar-identity {
        height: 60px;
    }

    .navbar-site.navbar .navbar-identity .btn,
    .navbar-site.navbar .navbar-identity .navbar-toggler {
        margin-top: 10px;
    }
}

@media (max-width: 479px) {
    #wrapper {
        padding-top: 61px;
    }

    .navbar-site.navbar .navbar-identity {
        height: 60px;
    }
}

@media (min-width: 768px) and (max-width: 992px) {
    .navbar.navbar-site .navbar-identity a.logo {
        height: 60px;
    }

    .navbar.navbar-site .navbar-identity a.logo-title {
        padding-top: 10px;
    }
}

@media (min-width: 768px) {
    .navbar.navbar-site .navbar-identity {
        margin-top: 0px;
    }

    .navbar.navbar-site .navbar-collapse {
        margin-top: 0px;
    }
}

.navbar.navbar-site {
    border-bottom-width: 1px !important;
    border-bottom-style: solid !important;
}

.navbar.navbar-site {
    border-bottom-color: #E8E8E8 !important;
}

/* === Footer === */

/* === Button: Add Listing === */

/* === Other: Grid View Columns === */
.make-grid .item-list {
    width: 25.00% !important;
}

@media (max-width: 767px) {
    .make-grid .item-list {
        width: 50% !important;
    }
}

.make-grid .item-list .cornerRibbons {
    left: -30.00%;
    top: 8%;
}

.make-grid.noSideBar .item-list .cornerRibbons {
    left: -22.00%;
    top: 8%;
}

@media (min-width: 992px) and (max-width: 1119px) {
    .make-grid .item-list .cornerRibbons {
        left: -36.00%;
        top: 8%;
    }

    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -26.00%;
        top: 8%;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .make-grid .item-list .cornerRibbons {
        left: -35.00%;
        top: 8%;
    }

    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -25.00%;
        top: 8%;
    }
}

@media (max-width: 767px) {
    .make-grid .item-list {
        width: 50%;
    }
}

@media (max-width: 767px) {

    .make-grid .item-list .cornerRibbons,
    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -10%;
        top: 8%;
    }
}

@media (max-width: 736px) {

    .make-grid .item-list .cornerRibbons,
    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -12%;
        top: 8%;
    }
}

@media (max-width: 667px) {

    .make-grid .item-list .cornerRibbons,
    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -13%;
        top: 8%;
    }
}

@media (max-width: 568px) {

    .make-grid .item-list .cornerRibbons,
    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -14%;
        top: 8%;
    }
}

@media (max-width: 480px) {

    .make-grid .item-list .cornerRibbons,
    .make-grid.noSideBar .item-list .cornerRibbons {
        left: -22%;
        top: 8%;
    }
}

.posts-wrapper.make-grid .item-list:nth-child(4n+4),
.category-list.make-grid .item-list:nth-child(4n+4) {
    border-right: solid 1px #ddd;
}

.posts-wrapper.make-grid .item-list:nth-child(3n+3),
.category-list.make-grid .item-list:nth-child(3n+3) {
    border-right: solid 1px #ddd;
}

.posts-wrapper.make-grid .item-list:nth-child(4n+4),
.category-list.make-grid .item-list:nth-child(4n+4) {
    border-right: none;
}

@media (max-width: 991px) {

    .posts-wrapper.make-grid .item-list:nth-child(4n+4),
    .category-list.make-grid .item-list:nth-child(4n+4) {
        border-right-style: solid;
        border-right-width: 1px;
        border-right-color: #ddd;
    }
}

/* === Homepage: Search Form Area === */
#homepage .wide-intro {
    background-image: url(https://laraclassified.bedigit.com/storage/app/logo/thumb-2000x1000-header-60fb58a67e38b.jpg?v=1);
    background-size: cover;
}

/* === Homepage: Locations & Country Map === */


/* === CSS Fix === */
.f-category h6 {
    color: #333;
}

.photo-count {
    color: #292b2c;
}

.page-info-lite h5 {
    color: #999999;
}

h4.item-price {
    color: #292b2c;
}

.skin-blue .pricetag {
    color: #fff;
}
</style>
<style>
.btn-check {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;

    .btn-primary {
        color: #000;
        background-color: #ffffff;
        border: 1px solid #000;
    }

    primary:active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #7c7d7d;
    }
}

*/#mdb-table-flag tr {
    cursor: pointer
}

.mdb-flag-selected {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    text-align: center;
    max-width: 150px;
    margin: 10px auto 0
}

.mdb-selected-flag-text {
    margin: 0 auto;
    max-width: 150px
}

i.flag:before {
    display: inline-block;
    width: 16px;
    height: 11px;
    content: "";
    background: url(https://mdbootstrap.com/img/svg/flags.png) no-repeat -108px -1976px
}

i.flag-ad:before,
i.flag-andorra:before {
    background-position: 0 0 !important
}

i.flag-ae:before,
i.flag-uae:before,
i.flag-united-arab-emirates:before {
    background-position: 0 -26px !important
}

i.flag-af:before,
i.flag-afghanistan:before {
    background-position: 0 -52px !important
}

i.flag-ag:before,
i.flag-antigua:before {
    background-position: 0 -78px !important
}

i.flag-ai:before,
i.flag-anguilla:before {
    background-position: 0 -104px !important
}

i.flag-al:before,
i.flag-albania:before {
    background-position: 0 -130px !important
}

i.flag-am:before,
i.flag-armenia:before {
    background-position: 0 -156px !important
}

i.flag-an:before,
i.flag-netherlands-antilles:before {
    background-position: 0 -182px !important
}

i.flag-angola:before,
i.flag-ao:before {
    background-position: 0 -208px !important
}

i.flag-ar:before,
i.flag-argentina:before {
    background-position: 0 -234px !important
}

i.flag-american-samoa:before,
i.flag-as:before {
    background-position: 0 -260px !important
}

i.flag-at:before,
i.flag-austria:before {
    background-position: 0 -286px !important
}

i.flag-au:before,
i.flag-australia:before {
    background-position: 0 -312px !important
}

i.flag-aruba:before,
i.flag-aw:before {
    background-position: 0 -338px !important
}

i.flag-aland-islands:before,
i.flag-ax:before {
    background-position: 0 -364px !important
}

i.flag-az:before,
i.flag-azerbaijan:before {
    background-position: 0 -390px !important
}

i.flag-ba:before,
i.flag-bosnia:before {
    background-position: 0 -416px !important
}

i.flag-barbados:before,
i.flag-bb:before {
    background-position: 0 -442px !important
}

i.flag-bangladesh:before,
i.flag-bd:before {
    background-position: 0 -468px !important
}

i.flag-be:before,
i.flag-belgium:before {
    background-position: 0 -494px !important
}

i.flag-bf:before,
i.flag-burkina-faso:before {
    background-position: 0 -520px !important
}

i.flag-bg:before,
i.flag-bulgaria:before {
    background-position: 0 -546px !important
}

i.flag-bahrain:before,
i.flag-bh:before {
    background-position: 0 -572px !important
}

i.flag-bi:before,
i.flag-burundi:before {
    background-position: 0 -598px !important
}

i.flag-benin:before,
i.flag-bj:before {
    background-position: 0 -624px !important
}

i.flag-bermuda:before,
i.flag-bm:before {
    background-position: 0 -650px !important
}

i.flag-bn:before,
i.flag-brunei:before {
    background-position: 0 -676px !important
}

i.flag-bo:before,
i.flag-bolivia:before {
    background-position: 0 -702px !important
}

i.flag-br:before,
i.flag-brazil:before {
    background-position: 0 -728px !important
}

i.flag-bahamas:before,
i.flag-bs:before {
    background-position: 0 -754px !important
}

i.flag-bhutan:before,
i.flag-bt:before {
    background-position: 0 -780px !important
}

i.flag-bouvet-island:before,
i.flag-bv:before {
    background-position: 0 -806px !important
}

i.flag-botswana:before,
i.flag-bw:before {
    background-position: 0 -832px !important
}

i.flag-belarus:before,
i.flag-by:before {
    background-position: 0 -858px !important
}

i.flag-belize:before,
i.flag-bz:before {
    background-position: 0 -884px !important
}

i.flag-ca:before,
i.flag-canada:before {
    background-position: 0 -910px !important
}

i.flag-cc:before,
i.flag-cocos-islands:before {
    background-position: 0 -962px !important
}

i.flag-cd:before,
i.flag-congo:before {
    background-position: 0 -988px !important
}

i.flag-central-african-republic:before,
i.flag-cf:before {
    background-position: 0 -1014px !important
}

i.flag-cg:before,
i.flag-congo-brazzaville:before {
    background-position: 0 -1040px !important
}

i.flag-ch:before,
i.flag-switzerland:before {
    background-position: 0 -1066px !important
}

i.flag-ci:before,
i.flag-cote-divoire:before {
    background-position: 0 -1092px !important
}

i.flag-ck:before,
i.flag-cook-islands:before {
    background-position: 0 -1118px !important
}

i.flag-chile:before,
i.flag-cl:before {
    background-position: 0 -1144px !important
}

i.flag-cameroon:before,
i.flag-cm:before {
    background-position: 0 -1170px !important
}

i.flag-china:before,
i.flag-cn:before {
    background-position: 0 -1196px !important
}

i.flag-co:before,
i.flag-colombia:before {
    background-position: 0 -1222px !important
}

i.flag-costa-rica:before,
i.flag-cr:before {
    background-position: 0 -1248px !important
}

i.flag-cs:before,
i.flag-serbia:before {
    background-position: 0 -1274px !important
}

i.flag-cu:before,
i.flag-cuba:before {
    background-position: 0 -1300px !important
}

i.flag-cape-verde:before,
i.flag-cv:before {
    background-position: 0 -1326px !important
}

i.flag-christmas-island:before,
i.flag-cx:before {
    background-position: 0 -1352px !important
}

i.flag-cy:before,
i.flag-cyprus:before {
    background-position: 0 -1378px !important
}

i.flag-cz:before,
i.flag-czech-republic:before {
    background-position: 0 -1404px !important
}

i.flag-de:before,
i.flag-germany:before {
    background-position: 0 -1430px !important
}

i.flag-dj:before,
i.flag-djibouti:before {
    background-position: 0 -1456px !important
}

i.flag-denmark:before,
i.flag-dk:before {
    background-position: 0 -1482px !important
}

i.flag-dm:before,
i.flag-dominica:before {
    background-position: 0 -1508px !important
}

i.flag-do:before,
i.flag-dominican-republic:before {
    background-position: 0 -1534px !important
}

i.flag-algeria:before,
i.flag-dz:before {
    background-position: 0 -1560px !important
}

i.flag-ec:before,
i.flag-ecuador:before {
    background-position: 0 -1586px !important
}

i.flag-ee:before,
i.flag-estonia:before {
    background-position: 0 -1612px !important
}

i.flag-eg:before,
i.flag-egypt:before {
    background-position: 0 -1638px !important
}

i.flag-eh:before,
i.flag-western-sahara:before {
    background-position: 0 -1664px !important
}

i.flag-england:before,
i.flag-gb-eng:before {
    background-position: 0 -1690px !important
}

i.flag-er:before,
i.flag-eritrea:before {
    background-position: 0 -1716px !important
}

i.flag-es:before,
i.flag-spain:before {
    background-position: 0 -1742px !important
}

i.flag-et:before,
i.flag-ethiopia:before {
    background-position: 0 -1768px !important
}

i.flag-eu:before,
i.flag-european-union:before {
    background-position: 0 -1794px !important
}

i.flag-fi:before,
i.flag-finland:before {
    background-position: 0 -1846px !important
}

i.flag-fiji:before,
i.flag-fj:before {
    background-position: 0 -1872px !important
}

i.flag-falkland-islands:before,
i.flag-fk:before {
    background-position: 0 -1898px !important
}

i.flag-fm:before,
i.flag-micronesia:before {
    background-position: 0 -1924px !important
}

i.flag-faroe-islands:before,
i.flag-fo:before {
    background-position: 0 -1950px !important
}

i.flag-fr:before,
i.flag-france:before {
    background-position: 0 -1976px !important
}

i.flag-ga:before,
i.flag-gabon:before {
    background-position: -36px 0 !important
}

i.flag-gb:before,
i.flag-uk:before,
i.flag-united-kingdom:before {
    background-position: -36px -26px !important
}

i.flag-gd:before,
i.flag-grenada:before {
    background-position: -36px -52px !important
}

i.flag-ge:before,
i.flag-georgia:before {
    background-position: -36px -78px !important
}

i.flag-french-guiana:before,
i.flag-gf:before {
    background-position: -36px -104px !important
}

i.flag-gh:before,
i.flag-ghana:before {
    background-position: -36px -130px !important
}

i.flag-gi:before,
i.flag-gibraltar:before {
    background-position: -36px -156px !important
}

i.flag-gl:before,
i.flag-greenland:before {
    background-position: -36px -182px !important
}

i.flag-gambia:before,
i.flag-gm:before {
    background-position: -36px -208px !important
}

i.flag-gn:before,
i.flag-guinea:before {
    background-position: -36px -234px !important
}

i.flag-gp:before,
i.flag-guadeloupe:before {
    background-position: -36px -260px !important
}

i.flag-equatorial-guinea:before,
i.flag-gq:before {
    background-position: -36px -286px !important
}

i.flag-gr:before,
i.flag-greece:before {
    background-position: -36px -312px !important
}

i.flag-gs:before,
i.flag-sandwich-islands:before {
    background-position: -36px -338px !important
}

i.flag-gt:before,
i.flag-guatemala:before {
    background-position: -36px -364px !important
}

i.flag-gu:before,
i.flag-guam:before {
    background-position: -36px -390px !important
}

i.flag-guinea-bissau:before,
i.flag-gw:before {
    background-position: -36px -416px !important
}

i.flag-guyana:before,
i.flag-gy:before {
    background-position: -36px -442px !important
}

i.flag-hk:before,
i.flag-hong-kong:before {
    background-position: -36px -468px !important
}

i.flag-heard-island:before,
i.flag-hm:before {
    background-position: -36px -494px !important
}

i.flag-hn:before,
i.flag-honduras:before {
    background-position: -36px -520px !important
}

i.flag-croatia:before,
i.flag-hr:before {
    background-position: -36px -546px !important
}

i.flag-haiti:before,
i.flag-ht:before {
    background-position: -36px -572px !important
}

i.flag-hu:before,
i.flag-hungary:before {
    background-position: -36px -598px !important
}

i.flag-id:before,
i.flag-indonesia:before {
    background-position: -36px -624px !important
}

i.flag-ie:before,
i.flag-ireland:before {
    background-position: -36px -650px !important
}

i.flag-il:before,
i.flag-israel:before {
    background-position: -36px -676px !important
}

i.flag-in:before,
i.flag-india:before {
    background-position: -36px -702px !important
}

i.flag-indian-ocean-territory:before,
i.flag-io:before {
    background-position: -36px -728px !important
}

i.flag-iq:before,
i.flag-iraq:before {
    background-position: -36px -754px !important
}

i.flag-ir:before,
i.flag-iran:before {
    background-position: -36px -780px !important
}

i.flag-iceland:before,
i.flag-is:before {
    background-position: -36px -806px !important
}

i.flag-it:before,
i.flag-italy:before {
    background-position: -36px -832px !important
}

i.flag-jamaica:before,
i.flag-jm:before {
    background-position: -36px -858px !important
}

i.flag-jo:before,
i.flag-jordan:before {
    background-position: -36px -884px !important
}

i.flag-japan:before,
i.flag-jp:before {
    background-position: -36px -910px !important
}

i.flag-ke:before,
i.flag-kenya:before {
    background-position: -36px -936px !important
}

i.flag-kg:before,
i.flag-kyrgyzstan:before {
    background-position: -36px -962px !important
}

i.flag-cambodia:before,
i.flag-kh:before {
    background-position: -36px -988px !important
}

i.flag-ki:before,
i.flag-kiribati:before {
    background-position: -36px -1014px !important
}

i.flag-comoros:before,
i.flag-km:before {
    background-position: -36px -1040px !important
}

i.flag-kn:before,
i.flag-saint-kitts-and-nevis:before {
    background-position: -36px -1066px !important
}

i.flag-kp:before,
i.flag-north-korea:before {
    background-position: -36px -1092px !important
}

i.flag-kr:before,
i.flag-south-korea:before {
    background-position: -36px -1118px !important
}

i.flag-kuwait:before,
i.flag-kw:before {
    background-position: -36px -1144px !important
}

i.flag-cayman-islands:before,
i.flag-ky:before {
    background-position: -36px -1170px !important
}

i.flag-kazakhstan:before,
i.flag-kz:before {
    background-position: -36px -1196px !important
}

i.flag-la:before,
i.flag-laos:before {
    background-position: -36px -1222px !important
}

i.flag-lb:before,
i.flag-lebanon:before {
    background-position: -36px -1248px !important
}

i.flag-lc:before,
i.flag-saint-lucia:before {
    background-position: -36px -1274px !important
}

i.flag-li:before,
i.flag-liechtenstein:before {
    background-position: -36px -1300px !important
}

i.flag-lk:before,
i.flag-sri-lanka:before {
    background-position: -36px -1326px !important
}

i.flag-liberia:before,
i.flag-lr:before {
    background-position: -36px -1352px !important
}

i.flag-lesotho:before,
i.flag-ls:before {
    background-position: -36px -1378px !important
}

i.flag-lithuania:before,
i.flag-lt:before {
    background-position: -36px -1404px !important
}

i.flag-lu:before,
i.flag-luxembourg:before {
    background-position: -36px -1430px !important
}

i.flag-latvia:before,
i.flag-lv:before {
    background-position: -36px -1456px !important
}

i.flag-libya:before,
i.flag-ly:before {
    background-position: -36px -1482px !important
}

i.flag-ma:before,
i.flag-morocco:before {
    background-position: -36px -1508px !important
}

i.flag-mc:before,
i.flag-monaco:before {
    background-position: -36px -1534px !important
}

i.flag-md:before,
i.flag-moldova:before {
    background-position: -36px -1560px !important
}

i.flag-me:before,
i.flag-montenegro:before {
    background-position: -36px -1586px !important
}

i.flag-madagascar:before,
i.flag-mg:before {
    background-position: -36px -1613px !important
}

i.flag-marshall-islands:before,
i.flag-mh:before {
    background-position: -36px -1639px !important
}

i.flag-macedonia:before,
i.flag-mk:before {
    background-position: -36px -1665px !important
}

i.flag-mali:before,
i.flag-ml:before {
    background-position: -36px -1691px !important
}

i.flag-burma:before,
i.flag-mm:before,
i.flag-myanmar:before {
    background-position: -73px -1821px !important
}

i.flag-mn:before,
i.flag-mongolia:before {
    background-position: -36px -1743px !important
}

i.flag-macau:before,
i.flag-mo:before {
    background-position: -36px -1769px !important
}

i.flag-mp:before,
i.flag-northern-mariana-islands:before {
    background-position: -36px -1795px !important
}

i.flag-martinique:before,
i.flag-mq:before {
    background-position: -36px -1821px !important
}

i.flag-mauritania:before,
i.flag-mr:before {
    background-position: -36px -1847px !important
}

i.flag-montserrat:before,
i.flag-ms:before {
    background-position: -36px -1873px !important
}

i.flag-malta:before,
i.flag-mt:before {
    background-position: -36px -1899px !important
}

i.flag-mauritius:before,
i.flag-mu:before {
    background-position: -36px -1925px !important
}

i.flag-maldives:before,
i.flag-mv:before {
    background-position: -36px -1951px !important
}

i.flag-malawi:before,
i.flag-mw:before {
    background-position: -36px -1977px !important
}

i.flag-mexico:before,
i.flag-mx:before {
    background-position: -72px 0 !important
}

i.flag-malaysia:before,
i.flag-my:before {
    background-position: -72px -26px !important
}

i.flag-mozambique:before,
i.flag-mz:before {
    background-position: -72px -52px !important
}

i.flag-na:before,
i.flag-namibia:before {
    background-position: -72px -78px !important
}

i.flag-nc:before,
i.flag-new-caledonia:before {
    background-position: -72px -104px !important
}

i.flag-ne:before,
i.flag-niger:before {
    background-position: -72px -130px !important
}

i.flag-nf:before,
i.flag-norfolk-island:before {
    background-position: -72px -156px !important
}

i.flag-ng:before,
i.flag-nigeria:before {
    background-position: -72px -182px !important
}

i.flag-ni:before,
i.flag-nicaragua:before {
    background-position: -72px -208px !important
}

i.flag-netherlands:before,
i.flag-nl:before {
    background-position: -72px -234px !important
}

i.flag-no:before,
i.flag-norway:before {
    background-position: -72px -260px !important
}

i.flag-nepal:before,
i.flag-np:before {
    background-position: -72px -286px !important
}

i.flag-nauru:before,
i.flag-nr:before {
    background-position: -72px -312px !important
}

i.flag-niue:before,
i.flag-nu:before {
    background-position: -72px -338px !important
}

i.flag-new-zealand:before,
i.flag-nz:before {
    background-position: -72px -364px !important
}

i.flag-om:before,
i.flag-oman:before {
    background-position: -72px -390px !important
}

i.flag-pa:before,
i.flag-panama:before {
    background-position: -72px -416px !important
}

i.flag-pe:before,
i.flag-peru:before {
    background-position: -72px -442px !important
}

i.flag-french-polynesia:before,
i.flag-pf:before {
    background-position: -72px -468px !important
}

i.flag-new-guinea:before,
i.flag-pg:before {
    background-position: -72px -494px !important
}

i.flag-ph:before,
i.flag-philippines:before {
    background-position: -72px -520px !important
}

i.flag-pakistan:before,
i.flag-pk:before {
    background-position: -72px -546px !important
}

i.flag-pl:before,
i.flag-poland:before {
    background-position: -72px -572px !important
}

i.flag-pm:before,
i.flag-saint-pierre:before {
    background-position: -72px -598px !important
}

i.flag-pitcairn-islands:before,
i.flag-pn:before {
    background-position: -72px -624px !important
}

i.flag-pr:before,
i.flag-puerto-rico:before {
    background-position: -72px -650px !important
}

i.flag-palestine:before,
i.flag-ps:before {
    background-position: -72px -676px !important
}

i.flag-portugal:before,
i.flag-pt:before {
    background-position: -72px -702px !important
}

i.flag-palau:before,
i.flag-pw:before {
    background-position: -72px -728px !important
}

i.flag-paraguay:before,
i.flag-py:before {
    background-position: -72px -754px !important
}

i.flag-qa:before,
i.flag-qatar:before {
    background-position: -72px -780px !important
}

i.flag-re:before,
i.flag-reunion:before {
    background-position: -72px -806px !important
}

i.flag-ro:before,
i.flag-romania:before {
    background-position: -72px -832px !important
}

i.flag-rs:before,
i.flag-serbia:before {
    background-position: -72px -858px !important
}

i.flag-ru:before,
i.flag-russia:before {
    background-position: -72px -884px !important
}

i.flag-rw:before,
i.flag-rwanda:before {
    background-position: -72px -910px !important
}

i.flag-sa:before,
i.flag-saudi-arabia:before {
    background-position: -72px -936px !important
}

i.flag-sb:before,
i.flag-solomon-islands:before {
    background-position: -72px -962px !important
}

i.flag-sc:before,
i.flag-seychelles:before {
    background-position: -72px -988px !important
}

i.flag-gb-sct:before,
i.flag-scotland:before {
    background-position: -72px -1014px !important
}

i.flag-sd:before,
i.flag-sudan:before {
    background-position: -72px -1040px !important
}

i.flag-se:before,
i.flag-sweden:before {
    background-position: -72px -1066px !important
}

i.flag-sg:before,
i.flag-singapore:before {
    background-position: -72px -1092px !important
}

i.flag-saint-helena:before,
i.flag-sh:before {
    background-position: -72px -1118px !important
}

i.flag-si:before,
i.flag-slovenia:before {
    background-position: -72px -1144px !important
}

i.flag-jan-mayen:before,
i.flag-sj:before,
i.flag-svalbard:before {
    background-position: -72px -1170px !important
}

i.flag-sk:before,
i.flag-slovakia:before {
    background-position: -72px -1196px !important
}

i.flag-sierra-leone:before,
i.flag-sl:before {
    background-position: -72px -1222px !important
}

i.flag-san-marino:before,
i.flag-sm:before {
    background-position: -72px -1248px !important
}

i.flag-senegal:before,
i.flag-sn:before {
    background-position: -72px -1274px !important
}

i.flag-so:before,
i.flag-somalia:before {
    background-position: -72px -1300px !important
}

i.flag-sr:before,
i.flag-suriname:before {
    background-position: -72px -1326px !important
}

i.flag-sao-tome:before,
i.flag-st:before {
    background-position: -72px -1352px !important
}

i.flag-el-salvador:before,
i.flag-sv:before {
    background-position: -72px -1378px !important
}

i.flag-sy:before,
i.flag-syria:before {
    background-position: -72px -1404px !important
}

i.flag-swaziland:before,
i.flag-sz:before {
    background-position: -72px -1430px !important
}

i.flag-caicos-islands:before,
i.flag-tc:before {
    background-position: -72px -1456px !important
}

i.flag-chad:before,
i.flag-td:before {
    background-position: -72px -1482px !important
}

i.flag-french-territories:before,
i.flag-tf:before {
    background-position: -72px -1508px !important
}

i.flag-tg:before,
i.flag-togo:before {
    background-position: -72px -1534px !important
}

i.flag-th:before,
i.flag-thailand:before {
    background-position: -72px -1560px !important
}

i.flag-tajikistan:before,
i.flag-tj:before {
    background-position: -72px -1586px !important
}

i.flag-tk:before,
i.flag-tokelau:before {
    background-position: -72px -1612px !important
}

i.flag-timorleste:before,
i.flag-tl:before {
    background-position: -72px -1638px !important
}

i.flag-tm:before,
i.flag-turkmenistan:before {
    background-position: -72px -1664px !important
}

i.flag-tn:before,
i.flag-tunisia:before {
    background-position: -72px -1690px !important
}

i.flag-to:before,
i.flag-tonga:before {
    background-position: -72px -1716px !important
}

i.flag-tr:before,
i.flag-turkey:before {
    background-position: -72px -1742px !important
}

i.flag-trinidad:before,
i.flag-tt:before {
    background-position: -72px -1768px !important
}

i.flag-tuvalu:before,
i.flag-tv:before {
    background-position: -72px -1794px !important
}

i.flag-taiwan:before,
i.flag-tw:before {
    background-position: -72px -1820px !important
}

i.flag-tanzania:before,
i.flag-tz:before {
    background-position: -72px -1846px !important
}

i.flag-ua:before,
i.flag-ukraine:before {
    background-position: -72px -1872px !important
}

i.flag-ug:before,
i.flag-uganda:before {
    background-position: -72px -1898px !important
}

i.flag-um:before,
i.flag-us-minor-islands:before {
    background-position: -72px -1924px !important
}

i.flag-america:before,
i.flag-united-states:before,
i.flag-us:before {
    background-position: -72px -1950px !important
}

i.flag-uruguay:before,
i.flag-uy:before {
    background-position: -72px -1976px !important
}

i.flag-uz:before,
i.flag-uzbekistan:before {
    background-position: -108px 0 !important
}

i.flag-va:before,
i.flag-vatican-city:before {
    background-position: -108px -26px !important
}

i.flag-saint-vincent:before,
i.flag-vc:before {
    background-position: -108px -52px !important
}

i.flag-ve:before,
i.flag-venezuela:before {
    background-position: -108px -78px !important
}

i.flag-british-virgin-islands:before,
i.flag-vg:before {
    background-position: -108px -104px !important
}

i.flag-us-virgin-islands:before,
i.flag-vi:before {
    background-position: -108px -130px !important
}

i.flag-vietnam:before,
i.flag-vn:before {
    background-position: -108px -156px !important
}

i.flag-vanuatu:before,
i.flag-vu:before {
    background-position: -108px -182px !important
}

i.flag-gb-wls:before,
i.flag-wales:before {
    background-position: -108px -208px !important
}

i.flag-wallis-and-futuna:before,
i.flag-wf:before {
    background-position: -108px -234px !important
}

i.flag-samoa:before,
i.flag-ws:before {
    background-position: -108px -260px !important
}

i.flag-ye:before,
i.flag-yemen:before {
    background-position: -108px -286px !important
}

i.flag-mayotte:before,
i.flag-yt:before {
    background-position: -108px -312px !important
}

i.flag-south-africa:before,
i.flag-za:before {
    background-position: -108px -338px !important
}

i.flag-zambia:before,
i.flag-zm:before {
    background-position: -108px -364px !important
}

i.flag-zimbabwe:before,
i.flag-zw:before {
    background-position: -108px -390px !important
}

.bg-image {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50%
}

.mask {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-attachment: fixed
}

.hover-overlay .mask {
    opacity: 0;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.hover-overlay .mask:hover {
    opacity: 1
}

.hover-zoom img,
.hover-zoom video {
    -webkit-transition: all .3s linear;
    transition: all .3s linear
}

.hover-zoom:hover img,
.hover-zoom:hover video {
    -webkit-transform: scale(1.1);
    transform: scale(1.1)
}

.card.hover-shadow,
.hover-shadow {
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.card.hover-shadow:hover,
.hover-shadow:hover {
    -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .21);
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .21);
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.bg-fixed {
    background-attachment: fixed
}

.card.hover-shadow-soft,
.hover-shadow-soft {
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.card.hover-shadow-soft:hover,
.hover-shadow-soft:hover {
    -webkit-box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .07), 0 10px 10px -5px rgba(0, 0, 0, .05);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .07), 0 10px 10px -5px rgba(0, 0, 0, .05);
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.form-control {
    min-height: auto;
    padding-top: 4px;
    padding-bottom: 3.28px
}

.form-control,
.form-control:focus {
    -webkit-transition: all .1s linear;
    transition: all .1s linear
}

.form-control:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #1266f1;
    -webkit-box-shadow: inset 0 0 0 1px #1266f1;
    box-shadow: inset 0 0 0 1px #1266f1
}

.form-control.form-control-sm {
    font-size: .775rem;
    line-height: 1.5
}

.form-control.form-control-lg {
    line-height: 2.15;
    border-radius: .25rem
}

.form-outline {
    position: relative
}

.form-outline .form-helper {
    width: 100%;
    position: absolute;
    font-size: .875em;
    color: #757575
}

.form-outline .form-helper .form-counter {
    text-align: right
}

.form-outline .trailing {
    position: absolute;
    right: 10px;
    left: auto;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    pointer-events: none
}

.form-outline .form-icon-trailing {
    padding-right: 2rem !important
}

.form-outline .form-control {
    min-height: auto;
    padding: .33em .75em;
    border: 0;
    background: transparent;
    -webkit-transition: all .2s linear;
    transition: all .2s linear
}

.form-outline .form-control~.form-label {
    position: absolute;
    top: 0;
    max-width: 90%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    left: .75rem;
    padding-top: .37rem;
    pointer-events: none;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: all .2s ease-out;
    transition: all .2s ease-out;
    color: rgba(0, 0, 0, .6);
    margin-bottom: 0
}

.form-outline .form-control~.form-notch {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    max-width: 100%;
    height: 100%;
    text-align: left;
    pointer-events: none
}

.form-outline .form-control~.form-notch div {
    pointer-events: none;
    border: 1px solid #bdbdbd;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    background: transparent
}

.form-outline .form-control~.form-notch .form-notch-leading {
    left: 0;
    top: 0;
    height: 100%;
    width: .5rem;
    border-right: none;
    border-radius: .25rem 0 0 .25rem
}

.form-outline .form-control~.form-notch .form-notch-middle {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: calc(100% - 1rem);
    height: 100%;
    border-right: none;
    border-left: none
}

.form-outline .form-control~.form-notch .form-notch-trailing {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    height: 100%;
    border-left: none;
    border-radius: 0 .25rem .25rem 0
}

.form-outline .form-control:not(.placeholder-active)::-webkit-input-placeholder {
    opacity: 0
}

.form-outline .form-control:not(.placeholder-active)::-moz-placeholder {
    opacity: 0
}

.form-outline .form-control:not(.placeholder-active):-ms-input-placeholder {
    opacity: 0
}

.form-outline .form-control:not(.placeholder-active)::-ms-input-placeholder {
    opacity: 0
}

.form-outline .form-control:not(.placeholder-active)::placeholder {
    opacity: 0
}

.form-outline .form-control.active::-webkit-input-placeholder,
.form-outline .form-control:focus::-webkit-input-placeholder {
    opacity: 1
}

.form-outline .form-control.active::-moz-placeholder,
.form-outline .form-control:focus::-moz-placeholder {
    opacity: 1
}

.form-outline .form-control.active:-ms-input-placeholder,
.form-outline .form-control:focus:-ms-input-placeholder {
    opacity: 1
}

.form-outline .form-control.active::-ms-input-placeholder,
.form-outline .form-control:focus::-ms-input-placeholder {
    opacity: 1
}

.form-outline .form-control.active::placeholder,
.form-outline .form-control:focus::placeholder {
    opacity: 1
}

.form-outline .form-control:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important
}

.form-outline .form-control.active~.form-label,
.form-outline .form-control:focus~.form-label {
    -webkit-transform: translateY(-1rem) translateY(.1rem) scale(.8);
    transform: translateY(-1rem) translateY(.1rem) scale(.8)
}

.form-outline .form-control:focus~.form-label {
    color: #1266f1
}

.form-outline .form-control.active~.form-notch .form-notch-middle,
.form-outline .form-control:focus~.form-notch .form-notch-middle {
    border-top: none;
    border-right: none;
    border-left: none;
    -webkit-transition: all .2s linear;
    transition: all .2s linear
}

.form-outline .form-control:focus~.form-notch .form-notch-middle {
    border-bottom: .125rem solid;
    border-color: #1266f1
}

.form-outline .form-control.active~.form-notch .form-notch-leading,
.form-outline .form-control:focus~.form-notch .form-notch-leading {
    border-right: none;
    -webkit-transition: all .2s linear;
    transition: all .2s linear
}

.form-outline .form-control:focus~.form-notch .form-notch-leading {
    border-top: .125rem solid #1266f1;
    border-bottom: .125rem solid #1266f1;
    border-left: .125rem solid #1266f1
}

.form-outline .form-control.active~.form-notch .form-notch-trailing,
.form-outline .form-control:focus~.form-notch .form-notch-trailing {
    border-left: none;
    -webkit-transition: all .2s linear;
    transition: all .2s linear
}

.form-outline .form-control:focus~.form-notch .form-notch-trailing {
    border-top: .125rem solid #1266f1;
    border-bottom: .125rem solid #1266f1;
    border-right: .125rem solid #1266f1
}

.form-outline .form-control.disabled,
.form-outline .form-control:disabled,
.form-outline .form-control[readonly] {
    background-color: #e9ecef
}

.form-outline .form-control.form-control-lg {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em
}

.form-outline .form-control.form-control-lg~.form-label {
    padding-top: .7rem
}

.form-outline .form-control.form-control-lg.active~.form-label,
.form-outline .form-control.form-control-lg:focus~.form-label {
    -webkit-transform: translateY(-1.25rem) translateY(.1rem) scale(.8);
    transform: translateY(-1.25rem) translateY(.1rem) scale(.8)
}

.form-outline .form-control.form-control-sm {
    padding: .43em .99em .35em;
    font-size: .775rem;
    line-height: 1.6
}

.form-outline .form-control.form-control-sm~.form-label {
    padding-top: .33rem;
    font-size: .775rem
}

.form-outline .form-control.form-control-sm.active~.form-label,
.form-outline .form-control.form-control-sm:focus~.form-label {
    -webkit-transform: translateY(-.85rem) translateY(.1rem) scale(.8);
    transform: translateY(-.85rem) translateY(.1rem) scale(.8)
}

.form-outline.form-white .form-control {
    color: #fff
}

.form-outline.form-white .form-control~.form-label {
    color: #fbfbfb
}

.form-outline.form-white .form-control~.form-notch div {
    border-color: #fbfbfb
}

.form-outline.form-white .form-control:focus~.form-label {
    color: #fff
}

.form-outline.form-white .form-control:focus~.form-notch .form-notch-middle {
    border-color: #fff
}

.form-outline.form-white .form-control:focus~.form-notch .form-notch-leading {
    border-top: .125rem solid #fff;
    border-bottom: .125rem solid #fff;
    border-left: .125rem solid #fff
}

.form-outline.form-white .form-control:focus~.form-notch .form-notch-trailing {
    border-color: #fff
}

.select-input.form-control[readonly]:not([disabled]) {
    background-color: transparent
}

.form-check {
    min-height: 1.5rem
}

.form-check-input {
    position: relative;
    width: 1.125rem;
    height: 1.125rem;
    background-color: #fff;
    border: .125rem solid #757575
}

.form-check-input:before {
    content: "";
    position: absolute;
    -webkit-box-shadow: 0 0 0 13px transparent;
    box-shadow: 0 0 0 13px transparent;
    border-radius: 50%;
    width: .875rem;
    height: .875rem;
    background-color: transparent;
    opacity: 0;
    pointer-events: none;
    -webkit-transform: scale(0);
    transform: scale(0)
}

.form-check-input:hover {
    cursor: pointer
}

.form-check-input:hover:before {
    opacity: .04;
    -webkit-box-shadow: 0 0 0 13px rgba(0, 0, 0, .6);
    box-shadow: 0 0 0 13px rgba(0, 0, 0, .6)
}

.form-check-input:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #757575;
    -webkit-transition: border-color .2s;
    transition: border-color .2s
}

.form-check-input:focus:before {
    opacity: .12;
    -webkit-box-shadow: 0 0 0 13px rgba(0, 0, 0, .6);
    box-shadow: 0 0 0 13px rgba(0, 0, 0, .6);
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: box-shadow .2s, transform .2s;
    transition: box-shadow .2s, transform .2s, -webkit-box-shadow .2s, -webkit-transform .2s
}

.form-check-input:checked {
    border-color: #1266f1
}

.form-check-input:checked:before {
    opacity: .16
}

.form-check-input:checked:after {
    content: "";
    position: absolute
}

.form-check-input:checked:focus {
    border-color: #1266f1
}

.form-check-input:checked:focus:before {
    -webkit-box-shadow: 0 0 0 13px #1266f1;
    box-shadow: 0 0 0 13px #1266f1;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: box-shadow .2s, transform .2s;
    transition: box-shadow .2s, transform .2s, -webkit-box-shadow .2s, -webkit-transform .2s
}

.form-check-input:indeterminate:focus:before {
    -webkit-box-shadow: 0 0 0 13px #1266f1;
    box-shadow: 0 0 0 13px #1266f1
}

.form-check-input[type=checkbox] {
    border-radius: .125rem;
    margin-top: .19em;
    margin-right: 8px
}

.form-check-input[type=checkbox]:focus:after {
    content: "";
    position: absolute;
    width: .875rem;
    height: .875rem;
    z-index: 1;
    display: block;
    border-radius: 0;
    background-color: #fff
}

.form-check-input[type=checkbox]:checked {
    background-image: none;
    background-color: #1266f1
}

.form-check-input[type=checkbox]:checked:after {
    display: block;
    -webkit-transform: rotate(45deg)
        /*!rtl:ignore*/
    ;
    transform: rotate(45deg)
        /*!rtl:ignore*/
    ;
    width: .375rem;
    height: .8125rem;
    border: .125rem solid #fff;
    border-top: 0;
    border-left: 0
        /*!rtl:ignore*/
    ;
    margin-left: .25rem;
    margin-top: -1px;
    background-color: transparent
}

.form-check-input[type=checkbox]:checked:focus {
    background-color: #1266f1
}

.form-check-input[type=checkbox]:indeterminate {
    background-image: none;
    background-color: transparent;
    border-color: #757575
}

.form-check-input[type=checkbox]:indeterminate:after {
    display: block;
    -webkit-transform: rotate(90deg)
        /*!rtl:ignore*/
    ;
    transform: rotate(90deg)
        /*!rtl:ignore*/
    ;
    width: .125rem;
    height: .875rem;
    border: .125rem solid #fff;
    border-top: 0;
    border-left: 0
        /*!rtl:ignore*/
    ;
    margin-left: .375rem;
    margin-top: 0
}

.form-check-input[type=checkbox]:indeterminate:focus {
    background-color: #1266f1;
    border-color: #1266f1
}

.form-check-input[type=radio] {
    border-radius: 50%;
    width: 1.25rem;
    height: 1.25rem;
    margin-top: .125em;
    margin-right: 6px
}

.form-check-input[type=radio]:before {
    width: 1rem;
    height: 1rem
}

.form-check-input[type=radio]:after {
    content: "";
    position: absolute;
    width: 1rem;
    height: 1rem;
    z-index: 1;
    display: block;
    border-radius: 50%;
    background-color: #fff
}

.form-check-input[type=radio]:checked {
    background-image: none;
    background-color: #fff
}

.form-check-input[type=radio]:checked:after {
    border-radius: 50%;
    width: .625rem;
    height: .625rem;
    border-color: #1266f1;
    background-color: #1266f1;
    -webkit-transition: border-color;
    transition: border-color;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    position: absolute;
    left: 50%;
    top: 50%
}

.form-check-input[type=radio]:checked:focus {
    background-color: #fff
}

.form-check-label:hover {
    cursor: pointer
}

.form-switch .form-check-input {
    background-image: none;
    border-width: 0;
    border-radius: .4375rem;
    width: 2.25rem;
    height: .875rem;
    background-color: rgba(0, 0, 0, .38);
    margin-top: .3em;
    margin-right: 8px
}

.form-switch .form-check-input:after {
    content: "";
    position: absolute;
    border: none;
    z-index: 2;
    border-radius: 50%;
    width: 1.25rem;
    height: 1.25rem;
    background-color: #fff;
    margin-top: -.1875rem;
    -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .07), 0 1px 2px 0 rgba(0, 0, 0, .05);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .07), 0 1px 2px 0 rgba(0, 0, 0, .05);
    -webkit-transition: background-color .2s, -webkit-transform .2s;
    transition: background-color .2s, -webkit-transform .2s;
    transition: background-color .2s, transform .2s;
    transition: background-color .2s, transform .2s, -webkit-transform .2s
}

.form-switch .form-check-input:focus {
    background-image: none
}

.form-switch .form-check-input:focus:before {
    -webkit-box-shadow: 3px -1px 0 13px rgba(0, 0, 0, .6);
    box-shadow: 3px -1px 0 13px rgba(0, 0, 0, .6);
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: box-shadow .2s, transform .2s;
    transition: box-shadow .2s, transform .2s, -webkit-box-shadow .2s, -webkit-transform .2s
}

.form-switch .form-check-input:focus:after {
    border-radius: 50%;
    width: 1.25rem;
    height: 1.25rem
}

.form-switch .form-check-input:checked,
.form-switch .form-check-input:checked:focus {
    background-image: none
}

.form-switch .form-check-input:checked:focus:before {
    margin-left: 1.0625rem;
    -webkit-box-shadow: 3px -1px 0 13px #1266f1;
    box-shadow: 3px -1px 0 13px #1266f1;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: -webkit-box-shadow .2s, -webkit-transform .2s;
    transition: box-shadow .2s, transform .2s;
    transition: box-shadow .2s, transform .2s, -webkit-box-shadow .2s, -webkit-transform .2s
}

.form-switch .form-check-input:checked[type=checkbox] {
    background-image: none
}

.form-switch .form-check-input:checked[type=checkbox]:after {
    content: "";
    position: absolute;
    border: none;
    z-index: 2;
    border-radius: 50%;
    width: 1.25rem;
    height: 1.25rem;
    background-color: #1266f1;
    margin-top: -3px;
    margin-left: 1.0625rem;
    -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
    box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
    -webkit-transition: background-color .2s, -webkit-transform .2s;
    transition: background-color .2s, -webkit-transform .2s;
    transition: background-color .2s, transform .2s;
    transition: background-color .2s, transform .2s, -webkit-transform .2s
}

.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.form-control[type=file]::-webkit-file-upload-button {
    background-color: transparent
}

.input-group>.form-control {
    min-height: calc(2.08rem + 2px);
    height: calc(2.08rem + 2px);
    padding-top: .27rem;
    padding-bottom: .27rem;
    -webkit-transition: all .2s linear;
    transition: all .2s linear
}

.input-group>.form-control:focus {
    -webkit-transition: all .2s linear;
    transition: all .2s linear;
    border-color: #1266f1;
    outline: 0;
    -webkit-box-shadow: inset 0 0 0 1px #1266f1;
    box-shadow: inset 0 0 0 1px #1266f1
}

.input-group-text {
    background-color: transparent;
    padding-top: .26rem;
    padding-bottom: .26rem
}

.input-group-text>.form-check-input[type=checkbox] {
    margin-left: 1px;
    margin-right: 1px
}

.input-group-text>.form-check-input[type=radio] {
    margin-right: 0
}

.input-group-lg>.form-control {
    height: calc(2.645rem + 2px);
    font-size: 1rem;
    padding-top: .33rem;
    padding-bottom: .33rem
}

.input-group-lg .input-group-text {
    font-size: 1rem
}

.input-group-sm>.form-control {
    min-height: calc(1.66rem + 2px);
    height: calc(1.66rem + 2px);
    font-size: .775rem;
    padding-top: .33rem;
    padding-bottom: .33rem
}

.input-group-sm .input-group-text {
    font-size: .775rem;
    line-height: 1.5
}

.input-group.form-outline .input-group-text {
    border-left: 0
}

.input-group.form-outline input+.input-group-text {
    border: 0;
    border-left: 1px solid #bdbdbd
}

.input-group .form-outline:not(:first-child),
.input-group .form-outline:not(:first-child) .form-notch-leading,
.input-group .select-wrapper:not(:first-child),
.input-group .select-wrapper:not(:first-child) .form-notch-leading {
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important
}

.input-group .form-outline:not(:last-child),
.input-group .form-outline:not(:last-child) .form-notch-trailing,
.input-group .select-wrapper:not(:last-child),
.input-group .select-wrapper:not(:last-child) .form-notch-trailing {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important
}

.input-group>[class*=btn-outline-]+[class*=btn-outline-] {
    border-left: 0
}

.input-group>.btn[class*=btn-outline-] {
    padding-top: .47rem
}

.input-group>.btn {
    padding-top: .59rem
}

.input-group .invalid-feedback,
.input-group .valid-feedback,
.was-validated .input-group .invalid-feedback,
.was-validated .input-group .valid-feedback {
    margin-top: 2.5rem
}

.valid-feedback {
    width: auto;
    color: #00b74a;
    margin-top: -.75rem
}

.valid-feedback,
.valid-tooltip {
    position: absolute;
    display: none;
    font-size: .875rem
}

.valid-tooltip {
    top: 100%;
    z-index: 5;
    max-width: 100%;
    padding: .25rem .5rem;
    margin-top: .1rem;
    background-color: rgba(0, 183, 74, .9);
    border-radius: .25rem !important;
    color: #fff
}

.is-valid~.valid-feedback,
.is-valid~.valid-tooltip,
.was-validated :valid~.valid-feedback,
.was-validated :valid~.valid-tooltip {
    display: block
}

.form-control.is-valid,
.was-validated .form-control:valid {
    margin-bottom: 1rem;
    background-image: none;
    border-color: #00b74a
}

.form-control.is-valid:focus,
.was-validated .form-control:valid:focus {
    border-color: #00b74a;
    -webkit-box-shadow: 0 0 0 .25rem rgba(0, 183, 74, .25);
    box-shadow: 0 0 0 .25rem rgba(0, 183, 74, .25)
}

.form-outline .form-control.is-valid~.form-label,
.was-validated .form-outline .form-control:valid~.form-label {
    color: #00b74a
}

.form-outline .form-control.is-valid~.form-notch .form-notch-leading,
.form-outline .form-control.is-valid~.form-notch .form-notch-middle,
.form-outline .form-control.is-valid~.form-notch .form-notch-trailing,
.form-select.is-valid,
.was-validated .form-outline .form-control:valid~.form-notch .form-notch-leading,
.was-validated .form-outline .form-control:valid~.form-notch .form-notch-middle,
.was-validated .form-outline .form-control:valid~.form-notch .form-notch-trailing,
.was-validated .form-select:valid {
    border-color: #00b74a
}

.form-select.is-valid:focus,
.was-validated .form-select:valid:focus {
    border-color: #00b74a;
    -webkit-box-shadow: 0 0 0 .25rem rgba(0, 183, 74, .25);
    box-shadow: 0 0 0 .25rem rgba(0, 183, 74, .25)
}

.form-select.is-valid~.valid-feedback,
.was-validated .form-select:valid~.valid-feedback {
    margin-top: 0
}

.input-group .form-control.is-valid,
.was-validated .input-group .form-control:valid {
    margin-bottom: 0
}

.was-validated input[type=file].form-control:valid .valid-feedback,
input[type=file].form-control.is-valid .valid-feedback {
    margin-top: 0
}

.was-validated input[type=file].form-control:valid:focus,
input[type=file].form-control.is-valid:focus {
    -webkit-box-shadow: inset 0 0 0 1px #00b74a;
    box-shadow: inset 0 0 0 1px #00b74a;
    border-color: #00b74a
}

.was-validated input[type=file].form-control:valid:focus~.form-file-label,
input[type=file].form-control.is-valid:focus~.form-file-label {
    -webkit-box-shadow: none;
    box-shadow: none
}

.was-validated input[type=file].form-control:valid:focus-within~.form-file-label .form-file-button,
.was-validated input[type=file].form-control:valid:focus-within~.form-file-label .form-file-text,
input[type=file].form-control.is-valid:focus-within~.form-file-label .form-file-button,
input[type=file].form-control.is-valid:focus-within~.form-file-label .form-file-text {
    border-color: #00b74a
}

.form-check-input.is-valid,
.was-validated .form-check-input:valid {
    border-color: #00b74a
}

.form-check-input.is-valid:checked,
.was-validated .form-check-input:valid:checked {
    background-color: #00b74a
}

.form-check-input.is-valid:checked:focus:before,
.was-validated .form-check-input:valid:checked:focus:before {
    -webkit-box-shadow: 0 0 0 13px #00b74a;
    box-shadow: 0 0 0 13px #00b74a
}

.form-check-input.is-valid:focus,
.was-validated .form-check-input:valid:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-check-input.is-valid:focus:before,
.was-validated .form-check-input:valid:focus:before {
    -webkit-box-shadow: 0 0 0 13px #00b74a;
    box-shadow: 0 0 0 13px #00b74a
}

.form-check-input.is-valid~.form-check-label,
.was-validated .form-check-input:valid~.form-check-label {
    color: #00b74a;
    margin-bottom: 1rem
}

.form-check-input.is-valid[type=checkbox]:checked:focus,
.was-validated .form-check-input:valid[type=checkbox]:checked:focus {
    background-color: #00b74a;
    border-color: #00b74a
}

.form-check-input.is-valid[type=radio]:checked,
.was-validated .form-check-input:valid[type=radio]:checked {
    border-color: #00b74a;
    background-color: #fff
}

.form-check-input.is-valid[type=radio]:checked:focus:before,
.was-validated .form-check-input:valid[type=radio]:checked:focus:before {
    -webkit-box-shadow: 0 0 0 13px #00b74a;
    box-shadow: 0 0 0 13px #00b74a
}

.form-check-input.is-valid[type=radio]:checked:after,
.was-validated .form-check-input:valid[type=radio]:checked:after {
    border-color: #00b74a;
    background-color: #00b74a
}

.form-check-inline .form-check-input~.valid-feedback {
    margin-left: .5em
}

.invalid-feedback {
    width: auto;
    color: #f93154;
    margin-top: -.75rem
}

.invalid-feedback,
.invalid-tooltip {
    position: absolute;
    display: none;
    font-size: .875rem
}

.invalid-tooltip {
    top: 100%;
    z-index: 5;
    max-width: 100%;
    padding: .25rem .5rem;
    margin-top: .1rem;
    background-color: rgba(249, 49, 84, .9);
    border-radius: .25rem !important;
    color: #fff
}

.is-invalid~.invalid-feedback,
.is-invalid~.invalid-tooltip,
.was-validated :invalid~.invalid-feedback,
.was-validated :invalid~.invalid-tooltip {
    display: block
}

.form-control.is-invalid,
.was-validated .form-control:invalid {
    margin-bottom: 1rem;
    background-image: none;
    border-color: #f93154
}

.form-control.is-invalid:focus,
.was-validated .form-control:invalid:focus {
    border-color: #f93154;
    -webkit-box-shadow: 0 0 0 .25rem rgba(249, 49, 84, .25);
    box-shadow: 0 0 0 .25rem rgba(249, 49, 84, .25)
}

.form-outline .form-control.is-invalid~.form-label,
.was-validated .form-outline .form-control:invalid~.form-label {
    color: #f93154
}

.form-outline .form-control.is-invalid~.form-notch .form-notch-leading,
.form-outline .form-control.is-invalid~.form-notch .form-notch-middle,
.form-outline .form-control.is-invalid~.form-notch .form-notch-trailing,
.form-select.is-invalid,
.was-validated .form-outline .form-control:invalid~.form-notch .form-notch-leading,
.was-validated .form-outline .form-control:invalid~.form-notch .form-notch-middle,
.was-validated .form-outline .form-control:invalid~.form-notch .form-notch-trailing,
.was-validated .form-select:invalid {
    border-color: #f93154
}

.form-select.is-invalid:focus,
.was-validated .form-select:invalid:focus {
    border-color: #f93154;
    -webkit-box-shadow: 0 0 0 .25rem rgba(249, 49, 84, .25);
    box-shadow: 0 0 0 .25rem rgba(249, 49, 84, .25)
}

.form-select.is-invalid~.invalid-feedback,
.was-validated .form-select:invalid~.invalid-feedback {
    margin-top: 0
}

.input-group .form-control.is-invalid,
.was-validated .input-group .form-control:invalid {
    margin-bottom: 0
}

.was-validated input[type=file].form-control:invalid .invalid-feedback,
input[type=file].form-control.is-invalid .invalid-feedback {
    margin-top: 0
}

.was-validated input[type=file].form-control:invalid:focus,
input[type=file].form-control.is-invalid:focus {
    -webkit-box-shadow: inset 0 0 0 1px #f93154;
    box-shadow: inset 0 0 0 1px #f93154;
    border-color: #f93154
}

.was-validated input[type=file].form-control:invalid:focus~.form-file-label,
input[type=file].form-control.is-invalid:focus~.form-file-label {
    -webkit-box-shadow: none;
    box-shadow: none
}

.was-validated input[type=file].form-control:invalid:focus-within~.form-file-label .form-file-button,
.was-validated input[type=file].form-control:invalid:focus-within~.form-file-label .form-file-text,
input[type=file].form-control.is-invalid:focus-within~.form-file-label .form-file-button,
input[type=file].form-control.is-invalid:focus-within~.form-file-label .form-file-text {
    border-color: #f93154
}

.form-check-input.is-invalid,
.was-validated .form-check-input:invalid {
    border-color: #f93154
}

.form-check-input.is-invalid:checked,
.was-validated .form-check-input:invalid:checked {
    background-color: #f93154
}

.form-check-input.is-invalid:checked:focus:before,
.was-validated .form-check-input:invalid:checked:focus:before {
    -webkit-box-shadow: 0 0 0 13px #f93154;
    box-shadow: 0 0 0 13px #f93154
}

.form-check-input.is-invalid:focus,
.was-validated .form-check-input:invalid:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-check-input.is-invalid:focus:before,
.was-validated .form-check-input:invalid:focus:before {
    -webkit-box-shadow: 0 0 0 13px #f93154;
    box-shadow: 0 0 0 13px #f93154
}

.form-check-input.is-invalid~.form-check-label,
.was-validated .form-check-input:invalid~.form-check-label {
    color: #f93154;
    margin-bottom: 1rem
}

.form-check-input.is-invalid[type=checkbox]:checked:focus,
.was-validated .form-check-input:invalid[type=checkbox]:checked:focus {
    background-color: #f93154;
    border-color: #f93154
}

.form-check-input.is-invalid[type=radio]:checked,
.was-validated .form-check-input:invalid[type=radio]:checked {
    border-color: #f93154;
    background-color: #fff
}

.form-check-input.is-invalid[type=radio]:checked:focus:before,
.was-validated .form-check-input:invalid[type=radio]:checked:focus:before {
    -webkit-box-shadow: 0 0 0 13px #f93154;
    box-shadow: 0 0 0 13px #f93154
}

.form-check-input.is-invalid[type=radio]:checked:after,
.was-validated .form-check-input:invalid[type=radio]:checked:after {
    border-color: #f93154;
    background-color: #f93154
}

.form-check-inline .form-check-input~.invalid-feedback {
    margin-left: .5em
}

.form-range:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-range:focus::-webkit-slider-thumb {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-range:focus::-moz-range-thumb {
    box-shadow: none
}

.form-range:focus::-ms-thumb {
    box-shadow: none
}

.form-range::-moz-focus-outer {
    border: 0
}

.form-range::-webkit-slider-thumb {
    margin-top: -6px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-appearance: none;
    appearance: none
}

.form-range::-webkit-slider-runnable-track {
    height: 4px;
    border-radius: 0
}

.form-range::-moz-range-thumb {
    box-shadow: none;
    -moz-appearance: none;
    appearance: none
}

.table {
    font-size: .9rem
}

.table>:not(caption)>*>* {
    padding: 1rem 1.4rem
}

.table th {
    font-weight: 500
}

.table tbody {
    font-weight: 300
}

.table>:not(:last-child)>:last-child>* {
    border-bottom-color: inherit
}

.table-sm>:not(caption)>*>* {
    padding: .5rem 1.4rem
}

.table-primary {
    background-color: #d0e0fc
}

.table-secondary {
    background-color: #f0d8ff
}

.table-success {
    background-color: #ccf1db
}

.table-info {
    background-color: #d7f2fb
}

.table-warning {
    background-color: #fec
}

.table-danger {
    background-color: #fed6dd
}

.table-light {
    background-color: #fbfbfb
}

.table-dark {
    background-color: #262626
}

.table-hover>tbody>tr {
    -webkit-transition: .5s;
    transition: .5s
}

.table-hover>tbody>tr:hover {
    --mdb-table-accent-bg: transparent;
    color: var(--mdb-table-hover-color);
    background-color: var(--mdb-table-hover-bg)
}

.btn {
    text-transform: uppercase;
    vertical-align: bottom;
    border: 0;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2), 0 2px 10px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2), 0 2px 10px 0 rgba(0, 0, 0, .1);
    font-weight: 500;
    padding: .625rem 1.5rem .5rem;
    font-size: .75rem;
    line-height: 1.5
}

.btn.active,
.btn.active:focus,
.btn.focus,
.btn:active,
.btn:active:focus,
.btn:focus,
.btn:hover {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn.disabled,
.btn:disabled,
fieldset:disabled .btn {
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2), 0 2px 10px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2), 0 2px 10px 0 rgba(0, 0, 0, .1);
    border: 0
}

.btn-check:focus+.btn,
.btn:focus {
    outline: 0;
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}



[class*=btn-outline-] {
    border-width: .125rem;
    border-style: solid;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: .5rem 1.375rem .375rem
}

[class*=btn-outline-].focus,
[class*=btn-outline-]:focus,
[class*=btn-outline-]:hover {
    -webkit-box-shadow: none;
    box-shadow: none;
    text-decoration: none
}

[class*=btn-outline-].active,
[class*=btn-outline-].active:focus,
[class*=btn-outline-].disabled,
[class*=btn-outline-]:active,
[class*=btn-outline-]:active:focus,
[class*=btn-outline-]:disabled,
fieldset:disabled [class*=btn-outline-] {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-group-lg>[class*=btn-outline-].btn,
[class*=btn-outline-].btn-lg {
    padding: .625rem 1.5625rem .5625rem
}

.btn-group-sm>[class*=btn-outline-].btn,
[class*=btn-outline-].btn-sm {
    padding: .25rem .875rem .1875rem
}

.btn-primary {
    color: #000;
    background-color: #ffffff;
    border: 1px solid #000;
}

.btn-primary.focus,
.btn-primary:focus,
.btn-primary:hover {
    color: #fff;
    background-color: #0c56d0
}

.btn-check:active+.btn-primary,
.btn-check:checked+.btn-primary,
.btn-primary.active,
.btn-primary:active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #7c7d7d;
}

.btn-check:active+.btn-primary:focus,
.btn-check:checked+.btn-primary:focus,
.btn-primary.active:focus,
.btn-primary:active:focus,
.show>.btn-primary.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}


.btn-success {
    color: #fff;
    background-color: #00b74a
}

.btn-success.focus,
.btn-success:focus,
.btn-success:hover {
    color: #fff;
    background-color: #00913b
}

.btn-check:active+.btn-success,
.btn-check:checked+.btn-success,
.btn-success.active,
.btn-success:active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #005121
}

.btn-check:active+.btn-success:focus,
.btn-check:checked+.btn-success:focus,
.btn-success.active:focus,
.btn-success:active:focus,
.show>.btn-success.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #00b74a
}

.btn-info {
    color: #fff;
    background-color: #39c0ed
}

.btn-info.focus,
.btn-info:focus,
.btn-info:hover {
    color: #fff;
    background-color: #16b5ea
}

.btn-check:active+.btn-info,
.btn-check:checked+.btn-info,
.btn-info.active,
.btn-info:active,
.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #1088b0
}

.btn-check:active+.btn-info:focus,
.btn-check:checked+.btn-info:focus,
.btn-info.active:focus,
.btn-info:active:focus,
.show>.btn-info.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    background-color: #39c0ed
}

.btn-warning {
    color: #fff;
    background-color: #ffa900
}

.btn-warning.focus,
.btn-warning:focus,
.btn-warning:hover {
    color: #fff;
    background-color: #d99000
}

.btn-check:active+.btn-warning,
.btn-check:checked+.btn-warning,
.btn-warning.active,
.btn-warning:active,
.show>.btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #996500
}

.btn-check:active+.btn-warning:focus,
.btn-check:checked+.btn-warning:focus,
.btn-warning.active:focus,
.btn-warning:active:focus,
.show>.btn-warning.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-warning.disabled,
.btn-warning:disabled {
    color: #fff;
    background-color: #ffa900
}

.btn-danger {
    color: #fff;
    background-color: #f93154
}

.btn-danger.focus,
.btn-danger:focus,
.btn-danger:hover {
    color: #fff;
    background-color: #f80c35
}

.btn-check:active+.btn-danger,
.btn-check:checked+.btn-danger,
.btn-danger.active,
.btn-danger:active,
.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #be0626
}

.btn-check:active+.btn-danger:focus,
.btn-check:checked+.btn-danger:focus,
.btn-danger.active:focus,
.btn-danger:active:focus,
.show>.btn-danger.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    background-color: #f93154
}

.btn-light {
    color: #4f4f4f;
    background-color: #fbfbfb
}

.btn-light.focus,
.btn-light:focus,
.btn-light:hover {
    color: #4f4f4f;
    background-color: #e8e8e8
}

.btn-check:active+.btn-light,
.btn-check:checked+.btn-light,
.btn-light.active,
.btn-light:active,
.show>.btn-light.dropdown-toggle {
    color: #4f4f4f;
    background-color: #c8c8c8
}

.btn-check:active+.btn-light:focus,
.btn-check:checked+.btn-light:focus,
.btn-light.active:focus,
.btn-light:active:focus,
.show>.btn-light.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-light.disabled,
.btn-light:disabled {
    color: #4f4f4f;
    background-color: #fbfbfb
}

.btn-dark {
    color: #fff;
    background-color: #262626
}

.btn-dark.focus,
.btn-dark:focus,
.btn-dark:hover {
    color: #fff;
    background-color: #131313
}

.btn-check:active+.btn-dark,
.btn-check:checked+.btn-dark,
.btn-dark.active,
.btn-dark:active,
.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #000
}

.btn-check:active+.btn-dark:focus,
.btn-check:checked+.btn-dark:focus,
.btn-dark.active:focus,
.btn-dark:active:focus,
.show>.btn-dark.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    background-color: #262626
}

.btn-white {
    color: #4f4f4f;
    background-color: #fff
}

.btn-white.focus,
.btn-white:focus,
.btn-white:hover {
    color: #4f4f4f;
    background-color: #ececec
}

.btn-check:active+.btn-white,
.btn-check:checked+.btn-white,
.btn-white.active,
.btn-white:active,
.show>.btn-white.dropdown-toggle {
    color: #4f4f4f;
    background-color: #ccc
}

.btn-check:active+.btn-white:focus,
.btn-check:checked+.btn-white:focus,
.btn-white.active:focus,
.btn-white:active:focus,
.show>.btn-white.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-white.disabled,
.btn-white:disabled {
    color: #4f4f4f;
    background-color: #fff
}

.btn-black,
.btn-black.active,
.btn-black.focus,
.btn-black:active,
.btn-black:focus,
.btn-black:hover,
.btn-check:active+.btn-black,
.btn-check:checked+.btn-black,
.show>.btn-black.dropdown-toggle {
    color: #fff;
    background-color: #000
}

.btn-black.active:focus,
.btn-black:active:focus,
.btn-check:active+.btn-black:focus,
.btn-check:checked+.btn-black:focus,
.show>.btn-black.dropdown-toggle:focus {
    -webkit-box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, .2), 0 4px 20px 0 rgba(0, 0, 0, .1)
}

.btn-black.disabled,
.btn-black:disabled {
    color: #fff;
    background-color: #000
}

.btn-outline-primary {
    color: #1266f1;
    border-color: #1266f1
}

.btn-outline-primary:hover {
    color: #1266f1;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-primary.active,
.btn-outline-primary.dropdown-toggle.show,
.btn-outline-primary.focus,
.btn-outline-primary:active,
.btn-outline-primary:focus {
    color: #1266f1;
    background-color: transparent
}

.btn-outline-primary.active:focus,
.btn-outline-primary.dropdown-toggle.show:focus,
.btn-outline-primary:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: #1266f1
}

.btn-outline-secondary {
    color: #b23cfd;
    border-color: #b23cfd
}

.btn-outline-secondary:hover {
    color: #b23cfd;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-secondary.active,
.btn-outline-secondary.dropdown-toggle.show,
.btn-outline-secondary.focus,
.btn-outline-secondary:active,
.btn-outline-secondary:focus {
    color: #b23cfd;
    background-color: transparent
}

.btn-outline-secondary.active:focus,
.btn-outline-secondary.dropdown-toggle.show:focus,
.btn-outline-secondary:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #b23cfd
}

.btn-outline-success {
    color: #00b74a;
    border-color: #00b74a
}

.btn-outline-success:hover {
    color: #00b74a;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-success.active,
.btn-outline-success.dropdown-toggle.show,
.btn-outline-success.focus,
.btn-outline-success:active,
.btn-outline-success:focus {
    color: #00b74a;
    background-color: transparent
}

.btn-outline-success.active:focus,
.btn-outline-success.dropdown-toggle.show:focus,
.btn-outline-success:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #00b74a
}

.btn-outline-info {
    color: #39c0ed;
    border-color: #39c0ed
}

.btn-outline-info:hover {
    color: #39c0ed;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-info.active,
.btn-outline-info.dropdown-toggle.show,
.btn-outline-info.focus,
.btn-outline-info:active,
.btn-outline-info:focus {
    color: #39c0ed;
    background-color: transparent
}

.btn-outline-info.active:focus,
.btn-outline-info.dropdown-toggle.show:focus,
.btn-outline-info:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #39c0ed
}

.btn-outline-warning {
    color: #ffa900;
    border-color: #ffa900
}

.btn-outline-warning:hover {
    color: #ffa900;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-warning.active,
.btn-outline-warning.dropdown-toggle.show,
.btn-outline-warning.focus,
.btn-outline-warning:active,
.btn-outline-warning:focus {
    color: #ffa900;
    background-color: transparent
}

.btn-outline-warning.active:focus,
.btn-outline-warning.dropdown-toggle.show:focus,
.btn-outline-warning:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ffa900
}

.btn-outline-danger {
    color: #f93154;
    border-color: #f93154
}

.btn-outline-danger:hover {
    color: #f93154;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-danger.active,
.btn-outline-danger.dropdown-toggle.show,
.btn-outline-danger.focus,
.btn-outline-danger:active,
.btn-outline-danger:focus {
    color: #f93154;
    background-color: transparent
}

.btn-outline-danger.active:focus,
.btn-outline-danger.dropdown-toggle.show:focus,
.btn-outline-danger:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #f93154
}

.btn-outline-light {
    color: #fbfbfb;
    border-color: #fbfbfb
}

.btn-outline-light:hover {
    color: #fbfbfb;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-light.active,
.btn-outline-light.dropdown-toggle.show,
.btn-outline-light.focus,
.btn-outline-light:active,
.btn-outline-light:focus {
    color: #fbfbfb;
    background-color: transparent
}

.btn-outline-light.active:focus,
.btn-outline-light.dropdown-toggle.show:focus,
.btn-outline-light:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #fbfbfb
}

.btn-outline-dark {
    color: #262626;
    border-color: #262626
}

.btn-outline-dark:hover {
    color: #262626;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-dark.active,
.btn-outline-dark.dropdown-toggle.show,
.btn-outline-dark.focus,
.btn-outline-dark:active,
.btn-outline-dark:focus {
    color: #262626;
    background-color: transparent
}

.btn-outline-dark.active:focus,
.btn-outline-dark.dropdown-toggle.show:focus,
.btn-outline-dark:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #262626
}

.btn-outline-white {
    color: #fff;
    border-color: #fff
}

.btn-outline-white:hover {
    color: #fff;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-white.active,
.btn-outline-white.dropdown-toggle.show,
.btn-outline-white.focus,
.btn-outline-white:active,
.btn-outline-white:focus {
    color: #fff;
    background-color: transparent
}

.btn-outline-white.active:focus,
.btn-outline-white.dropdown-toggle.show:focus,
.btn-outline-white:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-white.disabled,
.btn-outline-white:disabled {
    color: #fff
}

.btn-outline-black {
    color: #000;
    border-color: #000
}

.btn-outline-black:hover {
    color: #000;
    background-color: rgba(0, 0, 0, .02)
}

.btn-outline-black.active,
.btn-outline-black.dropdown-toggle.show,
.btn-outline-black.focus,
.btn-outline-black:active,
.btn-outline-black:focus {
    color: #000;
    background-color: transparent
}

.btn-outline-black.active:focus,
.btn-outline-black.dropdown-toggle.show:focus,
.btn-outline-black:active:focus {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-outline-black.disabled,
.btn-outline-black:disabled {
    color: #000
}

.btn-group-lg>.btn,
.btn-lg {
    padding: .75rem 1.6875rem .6875rem;
    font-size: .875rem;
    line-height: 1.6
}

.btn-group-sm>.btn,
.btn-sm {
    padding: .375rem 1rem .3125rem;
    font-size: .75rem;
    line-height: 1.5
}

.btn-link {
    -webkit-box-shadow: none;
    box-shadow: none;
    text-decoration: none
}

.btn-link.focus,
.btn-link:focus,
.btn-link:hover {
    text-decoration: none
}

.btn-link.active,
.btn-link.active:focus,
.btn-link.focus,
.btn-link:active,
.btn-link:active:focus,
.btn-link:focus,
.btn-link:hover {
    -webkit-box-shadow: none;
    box-shadow: none;
    background-color: #f5f5f5
}

.btn-link.disabled,
.btn-link:disabled,
fieldset:disabled .btn-link {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-rounded {
    border-radius: 10rem
}

.btn-floating,
[class*=btn-outline-].btn-floating {
    border-radius: 50%;
    padding: 0;
    position: relative
}

.btn-floating {
    width: 2.3125rem;
    height: 2.3125rem
}

.btn-floating .fab,
.btn-floating .far,
.btn-floating .fas {
    width: 2.3125rem;
    line-height: 2.3125rem
}

.btn-floating.btn-lg,
.btn-group-lg>.btn-floating.btn {
    width: 2.8125rem;
    height: 2.8125rem
}

.btn-floating.btn-lg .fab,
.btn-floating.btn-lg .far,
.btn-floating.btn-lg .fas,
.btn-group-lg>.btn-floating.btn .fab,
.btn-group-lg>.btn-floating.btn .far,
.btn-group-lg>.btn-floating.btn .fas {
    width: 2.8125rem;
    line-height: 2.8125rem
}

.btn-floating.btn-sm,
.btn-group-sm>.btn-floating.btn {
    width: 1.8125rem;
    height: 1.8125rem
}

.btn-floating.btn-sm .fab,
.btn-floating.btn-sm .far,
.btn-floating.btn-sm .fas,
.btn-group-sm>.btn-floating.btn .fab,
.btn-group-sm>.btn-floating.btn .far,
.btn-group-sm>.btn-floating.btn .fas {
    width: 1.8125rem;
    line-height: 1.8125rem
}

[class*=btn-outline-].btn-floating .fab,
[class*=btn-outline-].btn-floating .far,
[class*=btn-outline-].btn-floating .fas {
    width: 2.0625rem;
    line-height: 2.0625rem
}

.btn-group-lg>[class*=btn-outline-].btn-floating.btn .fab,
.btn-group-lg>[class*=btn-outline-].btn-floating.btn .far,
.btn-group-lg>[class*=btn-outline-].btn-floating.btn .fas,
[class*=btn-outline-].btn-floating.btn-lg .fab,
[class*=btn-outline-].btn-floating.btn-lg .far,
[class*=btn-outline-].btn-floating.btn-lg .fas {
    width: 2.5625rem;
    line-height: 2.5625rem
}

.btn-group-sm>[class*=btn-outline-].btn-floating.btn .fab,
.btn-group-sm>[class*=btn-outline-].btn-floating.btn .far,
.btn-group-sm>[class*=btn-outline-].btn-floating.btn .fas,
[class*=btn-outline-].btn-floating.btn-sm .fab,
[class*=btn-outline-].btn-floating.btn-sm .far,
[class*=btn-outline-].btn-floating.btn-sm .fas {
    width: 1.5625rem;
    line-height: 1.5625rem
}

.fixed-action-btn {
    position: fixed;
    right: 2.1875rem;
    bottom: 2.1875rem;
    z-index: 1030;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
    -ms-flex-flow: column-reverse nowrap;
    flex-flow: column-reverse nowrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: .9375rem 20px 20px;
    margin-bottom: 0;
    height: auto;
    overflow: hidden
}

.fixed-action-btn>.btn-floating {
    position: relative;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
    z-index: 10
}

.fixed-action-btn ul {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 0;
    margin: 0;
    text-align: center;
    opacity: 0;
    -webkit-transition: opacity .4s, -webkit-transform .4s;
    transition: opacity .4s, -webkit-transform .4s;
    transition: transform .4s, opacity .4s;
    transition: transform .4s, opacity .4s, -webkit-transform .4s;
    z-index: -1
}

.fixed-action-btn ul,
.fixed-action-btn ul li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.fixed-action-btn ul li {
    z-index: 0;
    margin-right: auto;
    margin-bottom: 1.5rem;
    margin-left: auto
}

.fixed-action-btn ul li:first-of-type {
    margin-top: .75rem
}

.fixed-action-btn ul a.btn {
    opacity: 0;
    -webkit-transition: opacity .4s ease-in;
    transition: opacity .4s ease-in
}

.fixed-action-btn.active ul,
.fixed-action-btn ul a.btn.shown {
    opacity: 1
}

.close {
    font-size: calc(1.275rem + .3vw);
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5
}

.close:hover {
    color: #000;
    text-decoration: none
}

.close:focus,
.close:hover {
    opacity: .75
}

.close.disabled,
.close:disabled {
    pointer-events: none
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0
}

.embed-responsive {
    position: relative;
    width: 100%
}

.embed-responsive:before {
    display: block;
    content: ""
}

.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.embed-responsive-21by9:before {
    padding-top: 42.85714%
}

.embed-responsive-16by9:before {
    padding-top: 56.25%
}

.embed-responsive-4by3:before {
    padding-top: 75%
}

.embed-responsive-1by1:before {
    padding-top: 100%
}

.sr-only,
.sr-only-focusable:not(:focus) {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important
}
@media (min-width: 200px) and (max-width: 767px) {
	.reverce-direction{
		flex-direction: column-reverse;
	}
}
</style>
<link href="{{ asset('public/assets/assets/plugins/bootstrap-fileinput/css/fileinput.min.css')}}" rel="stylesheet">

    <link href="https://babacarbazar.com/public/admin_assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css" />
@endpush
@section('active')
active
@endsection
@section('content')
@php
$id = $product->id ?? null;
$category_id = $product->category_id ?? null;
$brand_id = $product->brand_id ?? null;
$model_id = $product->model_id ?? null;
$variant_id = $product->variant_id ?? null;
$year = $product->year ?? null;
$fuel = $product->fuel ?? null;
$transmission = $product->transmission ?? null;
$km_drive = $product->km_drive ?? null;
$owners = $product->owners ?? null;
$images = $product->images ?? null;
$pro_desc = $product->pro_desc ?? null;
$price = $product->price ?? null;
$state_id = $product->state_id ?? null;
$dist_id = $product->dist_id ?? null;
$location_id = $product->location_id ?? null;
@endphp
<link type="text/css" rel="stylesheet" href="{{ asset('public/admin_assets/image-uploader/dist/image-uploader.min.css')}}">
<div class="h-spacer"></div>
<div class="main-container">
    <div class="container">
        <div class="row reverce-direction">
            @include('user.sidebar')
            <!--/.page-sidebar-->
            <div class="col-md-9 page-content">
                <div class="inner-box category-content">
                    <h2 class="title-2">
                        <strong>
                            <i class="fas fa-book"></i> Sell Your Cars /Bikes </strong>
                    </h2>
                    <div class="row">
                        <!-- Form controls -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd ">
                                <div class="panel-body">
                                    @if(empty($category_id))
                                    <strong>SELECTED CATEGORY</strong><br><br><span>{{$name}}</span> <a
                                        href="{{route('user.add.products')}}"
                                        style="padding-left: 41px;font-weight: bold;">Change</a>
                                    @endif
                                </div>
                                <div class="panel-body">
                                    <form id="test" action="{{ route('user.add-product')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input value="{{$id}}" type="hidden" name="id">
                                                @if(empty($category_id))
                                                <input value="{{$cate_id}}" type="hidden" name="cate_id">
                                                @else
                                                <div class="form-group">
                                                    <label for="category">Select Category <span
                                                            style="color:red">*</span></label>
                                                    <select id="category" class="form-control custom-select select2"
                                                        name="cate_id" required>
                                                        <option value="">Select Category</option>
                                                        @foreach($category as $cate)
                                                        <option value="{{$cate->id}}" @if($cate->id == $category_id)
                                                            selected @endif>{{$cate->cate_title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                                <div class="form-group">
                                                    <label for="brand">Select Brand <span
                                                            style="color:red">*</span></label>
                                                    <select id="brand" class="form-control custom-select select2"
                                                        name="brand_id" required>
                                                        <option value="">Select Brand</option>
                                                        @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}" @if($brand->id == $brand_id)
                                                            selected @endif>{{$brand->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="model">Select Model <span
                                                            style="color:red">*</span></label>
                                                    <select id="model" class="form-control custom-select"
                                                        name="model_id" required>
                                                        <option value="">Select brands first </option>
                                                    </select>
                                                </div>
                                                @if($cate_id == 1)
                                                <div class="form-group">
                                                    <label for="variant">Select Variant <span
                                                            style="color:red">*</span></label>
                                                    <select id="variant" class="form-control custom-select"
                                                        name="variant_id" required>
                                                        <option value="">Select model first</option>
                                                    </select>
                                                </div>
                                                @endif
                                                <div class="form-group">
                                                    <label for="banner1">Year <span style="color:red">*</span></label>
                                                    <input required value="{{$year}}" type="tel" id="inputName"
                                                        class="form-control" name="year"
                                                        onkeypress="return /[0-9 ]/i.test(event.key)">

                                                </div>
                                                @if($cate_id == 1)
                                                <div class="form-group">
                                                    <label for="banner1">Fuel <span style="color:red">*</span></label>
                                                    <p></p>
                                                    <input required type="radio" class="btn-check" id="btn-check"
                                                        @if($fuel=='CNG-Hybrids' ) checked @endif value="CNG-Hybrids"
                                                        autocomplete="off" name="fuel" />
                                                    <label class="btn btn-primary" for="btn-check"
                                                        style="font-size: 11px;">CNG & Hybrids</label>
                                                    <input required type="radio" class="btn-check" id="btn-check2"
                                                        @if($fuel=='Diesel' ) checked @endif value="Diesel"
                                                        autocomplete="off" name="fuel" />
                                                    <label class="btn btn-primary" for="btn-check2"
                                                        style="font-size: 11px;">Diesel</label>
                                                    <input required type="radio" class="btn-check" id="btn-check3"
                                                        @if($fuel=='Electric' ) checked @endif value="Electric"
                                                        autocomplete="off" name="fuel" />
                                                    <label class="btn btn-primary" for="btn-check3"
                                                        style="font-size: 11px;">Electric</label>
                                                    <input required type="radio" class="btn-check" id="btn-check4"
                                                        @if($fuel=='LPG' ) checked @endif value="LPG" autocomplete="off"
                                                        name="fuel" />
                                                    <label class="btn btn-primary" for="btn-check4"
                                                        style="font-size: 11px;">LPG</label>
                                                    <input required type="radio" class="btn-check" id="btn-check5"
                                                        @if($fuel=='Petrol' ) checked @endif value="Petrol"
                                                        autocomplete="off" name="fuel" />
                                                    <label class="btn btn-primary" for="btn-check5"
                                                        style="font-size: 11px;">Petrol</label>

                                                </div>
                                                <div class="form-group">
                                                    <label for="banner1">Transmission <span
                                                            style="color:red">*</span></label>
                                                    <p></p>
                                                    <input required type="radio" class="btn-check" id="transmission1"
                                                        @if($transmission=='Automatic' ) checked @endif
                                                        value="Automatic" autocomplete="off" name="transmission" />
                                                    <label class="btn btn-primary" for="transmission1"
                                                        style="font-size: 11px;">Automatic</label>

                                                    <input required type="radio" class="btn-check" id="transmission2"
                                                        @if($transmission=='Manual' ) checked @endif value="Manual"
                                                        autocomplete="off" name="transmission" />
                                                    <label class="btn btn-primary" for="transmission2"
                                                        style="font-size: 11px;">Manual</label>

                                                </div>
                                                @endif
                                                <div class="form-group">
                                                    <label for="km">KM driven <span style="color:red">*</span></label>
                                                    <p></p>
                                                    <input maxlength="6" required type="tel" value="{{$km_drive}}"
                                                        id="km" class="form-control" name="km_drive"
                                                        onkeypress="return /[0-9 ]/i.test(event.key)">
                                                </div>
                                                <div class="form-group">
                                                    <label for="banner1">No. of Owners <span
                                                            style="color:red">*</span></label>
                                                    <p></p>
                                                    <input required type="radio" class="btn-check" id="owners1"
                                                        @if($owners=='1st' ) checked @endif value="1st"
                                                        autocomplete="off" name="owners" />
                                                    <label class="btn btn-primary" for="owners1"
                                                        style="font-size: 11px;">1st</label>

                                                    <input required type="radio" class="btn-check" id="owners2"
                                                        @if($owners=='2nd' ) checked @endif value="2nd"
                                                        autocomplete="off" name="owners" />
                                                    <label class="btn btn-primary" for="owners2"
                                                        style="font-size: 11px;">2nd</label>

                                                    <input required type="radio" class="btn-check" id="owners3"
                                                        @if($owners=='3rd' ) checked @endif value="3rd"
                                                        autocomplete="off" name="owners" />
                                                    <label class="btn btn-primary" for="owners3"
                                                        style="font-size: 11px;">3rd</label>
                                                    <input required type="radio" class="btn-check" id="owners4"
                                                        @if($owners=='4th' ) checked @endif value="4th"
                                                        autocomplete="off" name="owners" />
                                                    <label class="btn btn-primary" for="owners4"
                                                        style="font-size: 11px;">4th</label>
                                                    <input required type="radio" class="btn-check" id="owners5"
                                                        @if($owners=='4+' ) checked @endif value="4+" autocomplete="off"
                                                        name="owners" />
                                                    <label class="btn btn-primary" for="owners5"
                                                        style="font-size: 11px;">4+</label>

                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="inputDescription">Description <span
                                                            style="color:red">*</span></label>
                                                    <textarea required class=" form-control" rows="4" name="pro_desc"
                                                        id="inputDescription">{{$pro_desc}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Price <span style="color:red">*</span></label>
                                                    <p></p>
                                                    <input required type="tel" value="{{$price}}" id="price"
                                                        class="form-control" name="price"
                                                        onkeypress="return /[0-9 ]/i.test(event.key)">
                                                </div>
                                                <div class="form-group row">
													<div class="col-md-6">
														<label for="state">Select State <span style="color:red">*</span></label>
														<select id="state" class="form-control custom-select select2" name="state_id"
															required>
															<option value="">Select State</option>
															@foreach($states as $state)
																<option value="{{$state->id}}" @if($state->id == $state_id) selected @endif>{{$state->name}}</option>
															@endforeach
														</select>
													</div>
													<div class="col-md-6">
														<label for="dist">Select District <span style="color:red">*</span></label>
														<select id="dist" class="form-control custom-select" name="dist_id"
															required>
															<option value="">Select State first </option>
															@foreach($dists as $dist)
																<option value="{{$dist->id}}" @if($dist->id == $dist_id) selected @endif>{{$dist->name}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="form-group">
													<label for="location">Select Blocks/ Tehsils/ Panchayats <span style="color:red">*</span></label>
													<select id="location" class="form-control custom-select" name="location_id"
														required>
														<option value="">Select District first </option>
													</select>
												</div>
                                                <div class="form-group">
                                                    <label for="banner1">UPLOAD UP TO 8 PHOTOS <span
                                                            style="color:red">*</span></label>
                                                    <div class="row mb-2">
                                                        @if(!empty($images))
                                                        @php $images = explode(',',$images); @endphp
                                                        @foreach($images as $key=>$image)
                                                        <div class="col-md-2 mb-2" id="data{{$key}}"> <span
                                                                data-id="data{{$key}}" class="deleteimage"
                                                                style="cursor: pointer;margin-left: 32px;border: 1px solid red;padding: 5px;border-radius: 50%;padding-top: -7px;">x</span>
                                                            <img src="{{ asset('public/uploads/products/')}}/{{$image}}"
                                                                class="img-sm border" style="width:80px">
                                                            <input type="hidden" name="images[]" value="{{$image}}">
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                    </div><br>
                                                   <div class="input-images"></div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="submit" style="font-size: 15px;" id="inputProjectLeader"
                                                class="btn btn-success btn-xl" style="font-size: 11px;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.page-content-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div> <!-- /.modal -->

@endsection


@push('custom_js')
<script type="text/javascript" src="{{ asset('public/admin_assets/image-uploader/dist/image-uploader.min.js')}}"></script>

<script src="https://babacarbazar.com/public/admin_assets/plugins/summernote/summernote.js" type="text/javascript"></script>
<script>

$('.input-images').imageUploader();

$('.deleteimage').click(function(e) {
    var data = $(this).data('id');
    $('#' + data).remove();
});

var modelId = parseInt("<?php if(!empty($product)){ echo $model_id; }else{ echo '0'; } ?>");
var variantId = parseInt("<?php if(!empty($product)){ echo $variant_id; }else{ echo '0'; } ?>");

$('#brand').on('change', function() {
    var brand = this.value;
    if (brand) {
        var brand = this.value;
    } else {
        var brand = "0";
    }
    $.ajax({
        url: "{{ route('user.change.brand')}}",
        type: "POST",
        data: {
            brand: brand
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        cache: false,
        error: function(xhr, textStatus) {
            alert(xhr.responseJSON.message);
        },
        success: function(result) {
            $("#model").html(result);
            if (modelId > 0) {
                $('#model').val(modelId);
                $('#model').trigger('change');
            }
        }
    });
});

if (modelId > 0) {
    $('#brand').trigger('change');
}

$('#model').on('change', function() {
    var model = this.value;
    if (model) {
        var model = this.value;
    } else {
        var model = "0";
    }
    $.ajax({
        url: "{{ route('user.change.model')}}",
        type: "POST",
        data: {
            model: model
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        cache: false,
        error: function(xhr, textStatus) {
            alert(xhr.responseJSON.message);
        },
        success: function(result) {
            $("#variant").html(result);
            if (variantId > 0) {
                $('#variant').val(variantId);
            }
        }
    });
});

		var location_id=parseInt("<?php if(!empty($product)){ echo $location_id; }else{ echo '0'; } ?>");

	$('#dist').on('change', function() {
		var dist = this.value;
		if(dist){
			var dist = this.value;
		}else{
			var dist = "0";
		}
		$.ajax({
			url: "{{ route('user.change.dist')}}",
			type: "POST",
			data: {
				dist: dist
			},
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
			},
			cache: false,
			error:function(xhr,textStatus){ 
				alert(xhr.responseJSON.message);
			},
			success: function(result){
				$("#location").html(result);
				if(location_id>0){ 
					$('#location').val(location_id);
					$('#location').trigger('change'); 
				}				
			}
		});
	});
	
	if(location_id>0){ 
		$('#dist').trigger('change');
	}
	
	//form submit
 $("form#test").submit(function(e) {
     e.preventDefault();

     var formId = $(this).attr('id');
     var formAction = $(this).attr('action');
     var formLoader = $(this).data('loader');

     $.ajax({
         url: formAction,
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
         },
         data: new FormData(this),
         type: 'post',
         dataType: 'json',
         beforeSend: function() {
             $('#preloader').css('display', 'inline-block');
             $('.button_' + formLoader).prop('inline-block', true);
         },
         error: function(xhr, textStatus) {
             if (textStatus == 'timeout') {
                 showMsg('warning', xhr.status + ': ' + xhr.statusText);
             } else {
                 showMsg('error', xhr.status + ': ' + xhr.statusText);
             }
             $('#preloader').css('display', 'none');
             $('.button_' + formLoader).prop('disabled', false);
         },
         success: function(data) {

             $('.button_' + formLoader).prop('disabled', false);
             $('#preloader').css('display', 'none');

             if (data.error) {
                 
                 showMsg('error', data.msg);
                 
             } else {
                 
                 $("#test")[0].reset()
                 showMsg('success', data.msg);
             }


         },
         cache: false,
         contentType: false,
         processData: false,
     });
 });
</script>
<script>
//Summernote
function sumnote() {
    var note = $('.summernote');
    $(note).summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
    });
}
sumnote();
</script>
@endpush
