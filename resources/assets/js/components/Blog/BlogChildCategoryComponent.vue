<template>
    <div>
        <div class="io_stream io_stream--section io_js_stream">
            <section class="u-maxWidth1000 pr-5 pl-5 mt-5 mb-5 ml-auto mr-auto">
                <div class="row mt-5 ml-5 mr-5">
                    <div
                            class="col-md-8 col-xs-12 col-lg-8 col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight15 u-size8of12"
                            data-source=""
                            data-post-id=""
                            data-index="0"
                            data-scroll="native"
                            v-if="!$store.getters.blogIsLoaded"
                    >
                        <div class="u-lineHeightBase postItem u-marginRight3">
                            <a href=""
                               class=""
                               data-action="post"
                               data-action-value="/link"
                               class="u-block u-xs-height170 u-height350 u-sizeFullWidth u-floatLeft  u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter"
                               style="background-image: url(http://iotunes.os/img/fabio-mangione.jpg);background-position: 50% 50% !important;"
                            >
                                <span class="textScreenRender">TITLE</span>
                            </a>
                        </div>
                    </div>

                    <div
                            class="col-md-8 u-xs-height170 u-height350 col-xs-12 col-lg-8 col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight15 u-size8of12 animated-background"
                            data-source=""
                            data-post-id=""
                            data-index="0"
                            data-scroll="native"
                            v-if="$store.getters.blogIsLoaded"

                    >
                    </div>


                    <div class="col-md-4 col-xs-12 col-lg-4">
                        <a href=""
                           data-source=""
                           data-post-id=""
                        >
                            <h3
                                    v-if="!$store.getters.blogIsLoaded"
                                    class="u-darkColor u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize36 u-xs-fontSize24">
                                    Bla bla bla !
                                </div>
                            </h3>

                            <h3
                                    v-if="$store.getters.blogIsLoaded"
                                    class="u-darkColor u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32 animated-background">

                            </h3>

                            <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                <div v-if="!$store.getters.blogIsLoaded" class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">You’ve shared some amazing and inspiring stories with us about how Behance has changed your creative career. By sharing both your work&nbsp;and…</div>
                                <div v-if="$store.getters.blogIsLoaded" class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">You’ve shared some amazing and inspiring stories with us about how Behance has changed your creative career. By sharing both your work&nbsp;and…</div>
                            </div>
                        </a>
                        <div class="u-clearfix u-marginTop20">
                            <div class="u-flexCenter">
                                <div class="postMetaInline-avatar u-flex0">
                                    <a v-if="!$store.getters.blogIsLoaded" class="link u-baseColor--link avatar" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">
                                        <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Behance">
                                    </a>
                                    <a v-if="$store.getters.blogIsLoaded" class="link u-baseColor--link avatar" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">
                                    </a>
                                </div>
                                <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                    <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">Behance</a>
                                    <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental">
                                        <time datetime="2017-12-20T22:38:28.748Z">Dec 21, 2017</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="streamItem streamItem--section js-streamItem">
            <section class="u-marginTop30 u-xs-margin0 u-marginBottom15 u-maxWidth1000 u-sm-paddingLeft20 u-sm-paddingRight20 u-borderBox u-marginAuto">
                <div class="heading heading--borderedBottom u-fontSize18 u-contentSansThin">
                    <div class="u-clearfix row">
                        <div class="heading-content col-md-8 col-lg-8 col-xs-8">
                            <span class="heading-title heading-title--dark heading-title--lineHeightTight u-fontSize18 u-contentSansThin">Lastest</span>
                        </div>
                    </div>
                </div>
                <div class="row u-marginTop30 u-marginLeftNegative12 u-marginRightNegative12">
                    <div v-if="!$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------0----------------" data-post-id="288a5532637c" data-index="0" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Ten Years of Creativity, Inspiration, and Behance: Our 2017 Year in Review</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" data-action-source="collection_home---4------0----------------" data-post-id="288a5532637c">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Ten Years of Creativity, Inspiration, and Behance: Our 2017 Year in&nbsp;Review</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">We are very excited to present to you Behance’s annual Year in Review. This is a time for us to look back on the astounding accomplishments…</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Behance"></a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">Behance</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-11-28T18:40:57.345Z">Nov 28, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="!$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------1----------------" data-post-id="642f7dff72d5" data-index="1" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Introducing Portfolio’s New Integration With Adobe Lightroom</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" data-action-source="collection_home---4------1----------------" data-post-id="642f7dff72d5">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Introducing Portfolio’s New Integration With Adobe Lightroom</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">Whether you’re a weekend adventurer or working the red carpet, Adobe Lightroom is a critical tool in every photographer’s kit. Designed…</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Adobe Portfolio"></a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">Adobe Portfolio</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-10-05T14:34:05.667Z">Oct 5, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="!$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------2----------------" data-post-id="2b50f87a1fab" data-index="2" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Student Adobe Portfolio Spotlight: Back to School with Marcela Londono</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" data-action-source="collection_home---4------2----------------" data-post-id="2b50f87a1fab">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Student Adobe Portfolio Spotlight: Back to School with Marcela&nbsp;Londono</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">Student Adobe Portfolio Spotlight: Back to School with Marcela&nbsp;Londono</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Adobe Portfolio">
                                        </a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">Adobe Portfolio</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-08-21T21:28:28.146Z">Aug 22, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row u-marginTop30 u-marginLeftNegative12 u-marginRightNegative12">
                    <div v-if="$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="u-marginTop30 u-xs-margin0 u-marginBottom15 u-maxWidth1000 u-sm-paddingLeft20 u-sm-paddingRight20 u-borderBox u-marginAuto">
                <div class="heading heading--borderedBottom u-fontSize18 u-contentSansThin" v-if="!$store.getters.blogIsLoaded">
                    <div class="u-clearfix row">
                        <div class="heading-content col-md-8 col-lg-8 col-xs-8">
                            <span class="heading-title heading-title--dark heading-title--lineHeightTight u-fontSize18 u-contentSansThin">Web</span>
                        </div>
                        <div class="heading-content col-md-4 col-lg-4 col-xs-4">
                            <div class="form-item u-floatRight">
                                <a class="form-button" unselectable="on" tabindex="0">
                                    <span class="rf-button__label">Voir plus</span>
                                    <span class="rf-button__icon-container rf-button__icon-container--trailing">
                                        <svg class="rf-icon rf-icon--triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 125.8 291.6" style="enable-background:new 0 0 125.8 291.6;"><polygon points="88.6,145.8 18.6,64.7 18.6,226.9 "></polygon></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row u-marginTop30 u-marginLeftNegative12 u-marginRightNegative12">
                    <div v-if="!$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------0----------------" data-post-id="288a5532637c" data-index="0" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Ten Years of Creativity, Inspiration, and Behance: Our 2017 Year in Review</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" data-action-source="collection_home---4------0----------------" data-post-id="288a5532637c">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Ten Years of Creativity, Inspiration, and Behance: Our 2017 Year in&nbsp;Review</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">We are very excited to present to you Behance’s annual Year in Review. This is a time for us to look back on the astounding accomplishments…</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Behance"></a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">Behance</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-11-28T18:40:57.345Z">Nov 28, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="!$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------1----------------" data-post-id="642f7dff72d5" data-index="1" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Introducing Portfolio’s New Integration With Adobe Lightroom</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" data-action-source="collection_home---4------1----------------" data-post-id="642f7dff72d5">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Introducing Portfolio’s New Integration With Adobe Lightroom</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">Whether you’re a weekend adventurer or working the red carpet, Adobe Lightroom is a critical tool in every photographer’s kit. Designed…</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Adobe Portfolio"></a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">Adobe Portfolio</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-10-05T14:34:05.667Z">Oct 5, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="!$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------2----------------" data-post-id="2b50f87a1fab" data-index="2" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Student Adobe Portfolio Spotlight: Back to School with Marcela Londono</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" data-action-source="collection_home---4------2----------------" data-post-id="2b50f87a1fab">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Student Adobe Portfolio Spotlight: Back to School with Marcela&nbsp;Londono</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">Student Adobe Portfolio Spotlight: Back to School with Marcela&nbsp;Londono</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Adobe Portfolio">
                                        </a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">Adobe Portfolio</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-08-21T21:28:28.146Z">Aug 22, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row u-marginTop30 u-marginLeftNegative12 u-marginRightNegative12">
                    <div v-if="$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="$store.getters.blogIsLoaded" class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="u-marginTop30 u-xs-margin0 u-marginBottom15 u-maxWidth1000 u-sm-paddingLeft20 u-sm-paddingRight20 u-borderBox u-marginAuto" v-if="!$store.getters.blogIsLoaded">
                <div class="heading heading--borderedBottom u-fontSize18 u-contentSansThin">
                    <div class="u-clearfix row">
                        <div class="heading-content col-md-8 col-lg-8 col-xs-8">
                            <span class="heading-title heading-title--dark heading-title--lineHeightTight u-fontSize18 u-contentSansThin">Web</span>
                        </div>
                        <div class="heading-content col-md-4 col-lg-4 col-xs-4">
                            <div class="form-item u-floatRight">
                                <a class="form-button" unselectable="on" tabindex="0">
                                    <span class="rf-button__label">Voir plus</span>
                                    <span class="rf-button__icon-container rf-button__icon-container--trailing">
                                        <svg class="rf-icon rf-icon--triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 125.8 291.6" style="enable-background:new 0 0 125.8 291.6;"><polygon points="88.6,145.8 18.6,64.7 18.6,226.9 "></polygon></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row u-marginTop30 u-marginLeftNegative12 u-marginRightNegative12">
                    <div class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------0----------------" data-post-id="288a5532637c" data-index="0" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Ten Years of Creativity, Inspiration, and Behance: Our 2017 Year in Review</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/ten-years-of-creativity-inspiration-and-behance-288a5532637c?source=collection_home---4------0----------------" data-action-source="collection_home---4------0----------------" data-post-id="288a5532637c">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Ten Years of Creativity, Inspiration, and Behance: Our 2017 Year in&nbsp;Review</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">We are very excited to present to you Behance’s annual Year in Review. This is a time for us to look back on the astounding accomplishments…</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Behance"></a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@Behance" data-action="show-user-card" data-action-value="f5272b7f3182" data-action-type="hover" data-user-id="f5272b7f3182" dir="auto">Behance</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-11-28T18:40:57.345Z">Nov 28, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------1----------------" data-post-id="642f7dff72d5" data-index="1" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Introducing Portfolio’s New Integration With Adobe Lightroom</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/introducing-portfolios-new-integration-with-adobe-lightroom-642f7dff72d5?source=collection_home---4------1----------------" data-action-source="collection_home---4------1----------------" data-post-id="642f7dff72d5">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Introducing Portfolio’s New Integration With Adobe Lightroom</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">Whether you’re a weekend adventurer or working the red carpet, Adobe Lightroom is a critical tool in every photographer’s kit. Designed…</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Adobe Portfolio"></a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">Adobe Portfolio</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-10-05T14:34:05.667Z">Oct 5, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------2----------------" data-post-id="2b50f87a1fab" data-index="2" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" class="u-block u-xs-height170 u-height172 u-backgroundSizeCover u-backgroundOriginBorderBox u-backgroundColorGrayLight u-borderLighter" style="background-image: url(&quot;http://iotunes.os/img/ilya-yakover.jpg&quot;); background-position: 50% 50% !important;">
                                <span class="u-textScreenReader">Student Adobe Portfolio Spotlight: Back to School with Marcela Londono</span>
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="" href="https://medium.com/behance-blog/first-how-about-an-intro-whats-your-name-where-are-you-from-2b50f87a1fab?source=collection_home---4------2----------------" data-action-source="collection_home---4------2----------------" data-post-id="2b50f87a1fab">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24">Student Adobe Portfolio Spotlight: Back to School with Marcela&nbsp;Londono</div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal">Student Adobe Portfolio Spotlight: Back to School with Marcela&nbsp;Londono</div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                            <img src="http://iotunes.os/img/apple-icon.png" class="avatar-image u-size36x36 u-xs-size32x32" alt="Go to the profile of Adobe Portfolio">
                                        </a>
                                    </div>
                                    <div class="postMetaInline postMetaInline-authorLockup ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">Adobe Portfolio</a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental"><time datetime="2017-08-21T21:28:28.146Z">Aug 22, 2017</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row u-marginTop30 u-marginLeftNegative12 u-marginRightNegative12">
                    <div class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-items col u-xs-size12of12 js-trackedPost u-paddingLeft12 u-marginBottom15 u-paddingRight12 u-size4of12" data-source="collection_home---4------3----------------" data-post-id="ea33180028d4" data-index="3" data-scroll="native">
                        <div class="u-lineHeightBase postItem">
                            <a href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action="open-post" data-action-value="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" class="u-block u-xs-height170 u-height172  animated-background">
                            </a>
                        </div>
                        <div class="col u-xs-marginBottom10 u-paddingLeft0 u-paddingRight0 u-paddingTop15 u-marginBottom30">
                            <a class="animated-background" href="https://medium.com/behance-blog/student-adobe-portfolio-spotlight-back-to-school-with-mary-ann-putulin-ea33180028d4?source=collection_home---4------3----------------" data-action-source="collection_home---4------3----------------" data-post-id="ea33180028d4">
                                <h3 class="u-contentSansBold u-lineHeightTightest u-xs-fontSize24 u-paddingBottom2 u-paddingTop5 u-fontSize32">
                                    <div class="u-letterSpacingTight u-lineHeightTighter u-fontSize24 animated-background" ></div>
                                </h3>
                                <div class="u-contentSansThin u-lineHeightBaseSans u-fontSize24 u-xs-fontSize18 u-textColorNormal u-baseColor--textNormal">
                                    <div class="u-fontSize18 u-letterSpacingTight u-lineHeightTight u-marginTop7 u-textColorNormal u-baseColor--textNormal animated-background"></div>
                                </div>
                            </a>
                            <div class="u-clearfix u-marginTop20">
                                <div class="u-flexCenter">
                                    <div class="postMetaInline-avatar u-flex0">
                                        <a class="link u-baseColor--link avatar animated-background animated-image" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto">
                                        </a>
                                    </div>
                                    <div class="postMetaInline ui-captionStrong u-flex1 u-noWrapWithEllipsis">
                                        <a class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken animated-background" href="https://medium.com/@AdobePortfolio" data-action="show-user-card" data-action-value="f112906f26fb" data-action-type="hover" data-user-id="f112906f26fb" dir="auto"></a>
                                        <div class="ui-caption u-fontSize12 u-baseColor--textNormal u-textColorNormal js-postMetaInlineSupplemental animated-background"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            setTimeout(() => {
                this.isLoading = false
                this.$store.dispatch('blogContentLoaded', this.isLoading)
            }, 2000)
        },
        data() {
            return {
                isLoading: true
            }
        }
    }
</script>