<?php
/**
 * Beans typography page installed after plugin activation.
 *
 * @package beans-typography
 * @author  Maurice Tadros
 * @license GPL-2.0-or-later
 * @link    https://www.bowriverstudio.com/
 */

return <<<CONTENT
<!-- wp:html -->
<div class="has-large-font-size">
HELLO WORLD
</div>
<!-- /wp:html -->

<!-- wp:html -->
<hr class="uk-grid-divider">
<div class="uk-grid">
    <div class="uk-width-1-1">
        <div class="uk-button-group">
            <button class="uk-button uk-button-default uk-button-small" type="button">Hover</button>
            <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
                <ul class="uk-nav uk-dropdown-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li class="uk-nav-header">Header</li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#">Item</a></li>
                </ul>
            </div>
        </div>

        <div class="uk-button-group">
            <button class="uk-button uk-button-default uk-button-small">Button</button>
            <div class="uk-inline">
                <button class="uk-button uk-button-default uk-button-small" type="button"><span
                        uk-icon="icon:  triangle-down"></span></button>
                <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="uk-button-group">
            <button class="uk-button uk-button-primary uk-button-small">Primary</button>
            <div class="uk-inline">
                <button class="uk-button uk-button-primary uk-button-small" type="button"><span
                        uk-icon="icon:  triangle-down"></span></button>
                <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="uk-button-group">
            <button class="uk-button uk-button-secondary uk-button-small">Secondary</button>
            <div class="uk-inline">
                <button class="uk-button uk-button-secondary uk-button-small" type="button"><span
                        uk-icon="icon:  triangle-down"></span></button>
                <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="uk-button-group">
            <button class="uk-button uk-button-danger uk-button-small">Danger</button>
            <div class="uk-inline">
                <button class="uk-button uk-button-danger uk-button-small" type="button"><span
                        uk-icon="icon:  triangle-down"></span></button>
                <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <button class="uk-button uk-button-default uk-button-small" disabled="">Disabled</button>
        <button class="uk-button uk-button-default uk-button-small" data-uk-tooltip="" title="Bazinga!">Tooltip</button>
        <a class="uk-button uk-button-default uk-button-small" href="#modal-sections" uk-toggle>Modal</a>
        <button class="uk-button uk-button-default uk-button-small" type="button" uk-toggle="target: #offcanvas-slide">
            Slide
        </button>

        <button class="uk-button uk-button-default uk-button-small" type="button" uk-toggle="target: #offcanvas-push">
            Push
        </button>

        <button class="uk-button uk-button-default uk-button-small" type="button" uk-toggle="target: #offcanvas-reveal">
            Reveal
        </button>

    </div>
</div>
<hr class="uk-grid-divider">
<div class="uk-grid" data-uk-grid-margin="">
    <div class="uk-width-1-2@m uk-row-first">
        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <article class="uk-article">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-1-2 uk-width-1-3@m uk-row-first">
                            <span class="uk-text-muted">text-muted</span><br>
                            <span class="uk-text-primary">text-primary</span><br>
                            <span class="uk-text-success">text-success</span><br>
                            <span class="uk-text-warning">text-warning</span><br>
                            <span class="uk-text-danger">text-danger</span>
                        </div>
                        <div class="uk-width-1-2 uk-width-1-3@m">
                            <a href="#">a element</a><br>
                            <em>em element</em><br>
                            <strong>strong</strong><br>
                            <code>code element</code><br>
                            <del>del element</del>
                        </div>
                        <div class="uk-width-1-2 uk-width-1-3@m">
                            <ins>ins element</ins>
                            <br>
                            <mark>mark element</mark>
                            <br>
                            <q>q <q>inside</q> a q element </q><br>
                            <abbr title="Abbreviation Element">abbr element</abbr><br>
                            <dfn title="Defines a definition term">dfn element</dfn>
                        </div>
                        <div class="uk-width-1-2 uk-grid-margin uk-row-first">
                            <h1 class="uk-display-inline">h1</h1>
                            <h2 class="uk-display-inline">h2</h2>
                            <h3 class="uk-display-inline">h3</h3>
                            <h4 class="uk-display-inline">h4</h4>
                            <h5 class="uk-display-inline">h5</h5>
                            <h6 class="uk-display-inline">h6</h6>
                        </div>
                        <div class="uk-width-1-2@m uk-grid-margin">
                            <blockquote>
                                <p> Lorem ipsum dolor.</p>
                                <small>Someone famous</small>
                            </blockquote>
                        </div>
                    </div>
                </article>
            </div>
            <div class="uk-width-1-1 uk-grid-margin uk-row-first">
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-1-2@s uk-row-first">
                        <ul class="uk-list uk-list-divider">
                            <li>List item 1</li>
                            <li>List item 2</li>
                            <li>List item 3</li>
                        </ul>
                    </div>
                    <div class="uk-width-1-2@s">
                        <ul class="uk-list uk-list-striped">
                            <li>List item 1</li>
                            <li>List item 2</li>
                            <li>List item 3</li>
                        </ul>
                    </div>
                    <div class="uk-width-1-2@s uk-grid-margin uk-row-first">
                        <table class="uk-table uk-table-striped uk-table-small uk-table-hover">
                            <caption>Table caption</caption>
                            <thead>
                            <tr>
                                <th>Table</th>
                                <th>Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Table</td>
                                <td>Data</td>
                            </tr>
                            <tr>
                                <td>Table</td>
                                <td>Data</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="uk-width-1-2@s uk-grid-margin">
                        <dl class="uk-description-list">
                            <dt>Description term</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
                            <dt>Description term</dt>
                            <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sa.</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-grid-margin uk-row-first">
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-1-2@s uk-row-first">
                        <ul class="uk-subnav uk-subnav-line">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><span>Disabled</span></li>
                        </ul>

                    </div>
                    <div class="uk-width-1-2@s uk-grid-margin uk-row-first">
                        <ul uk-tab>
                            <li class="uk-active"><a href="#">Left</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-disabled"><a>Disabled</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-2@s uk-grid-margin">
                        <span class="uk-icon-button" uk-icon="github"></span>
                        <span class="uk-icon-button" uk-icon="twitter"></span>
                        <span class="uk-icon-button" uk-icon="dribbble"></span>
                        <span class="uk-icon-button" uk-icon="wordpress"></span>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-grid-margin uk-row-first">
                <span class="uk-badge">Badge</span>
                <span class="uk-badge uk-badge-notification">1</span>
                <span class="uk-badge uk-label-success">Success</span>
                <span class="uk-badge uk-label-success uk-badge-notification">4</span>
                <span class="uk-badge uk-label-warning">Warning</span>
                <span class="uk-badge uk-label-warning uk-badge-notification">3</span>
                <span class="uk-badge uk-label-danger">Danger</span>
                <span class="uk-badge uk-label-danger uk-badge-notification">4</span>
            </div>
            <div class="uk-width-1-1 uk-grid-margin uk-row-first">
                <ul class="uk-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><span>Category</span></li>
                    <li class="uk-active"><span>Post</span></li>
                </ul>
            </div>
            <div class="uk-width-1-1 uk-grid-margin uk-row-first">
                <ul class="uk-pagination uk-flex-center" uk-margin>
                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span>7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="uk-width-1-2@m">
        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-1-2@s uk-row-first">
                <div class="uk-panel">
                    <h3 class="uk-panel-title">Side Navigation</h3>

                    <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav="">
                        <li class="uk-active"><a href="#">Active</a></li>

                        <li class="uk-nav uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a>
                                    <ul>
                                        <li><a href="#">Sub item</a></li>
                                        <li><a href="#">Sub item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-card-badge uk-label">Badge</div>
                    <h3 class="uk-card-title">Title</h3>
                    <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <br>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-panel-title">Divider</h3>
                    </div>
                    <div class="uk-card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-text">Read more</a>
                    </div>
                </div>
            </div>


            <div class="uk-width-1-2@s">
                <div>
                    <div class="uk-card uk-card-hover uk-card-body">
                        <h3 class="uk-card-title">Hover</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-1-2@s uk-row-first">
                <div class="uk-alert-primary" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Info message</p>
                </div>
            </div>
            <div class="uk-width-1-2@s">
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Success message</p>
                </div>
            </div>
            <div class="uk-width-1-2@s uk-grid-margin uk-row-first">
                <div class="uk-alert-warning" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Warning message</p>
                </div>
            </div>
            <div class="uk-width-1-2@s uk-grid-margin">
                <div class="uk-alert-danger" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Danger message</p>
                </div>
            </div>
            <div class="uk-width-1-2@s uk-grid-margin uk-row-first">
                <progress class="uk-progress" value="55" max="100">55%</progress>
            </div>
            <div class="uk-width-1-2@s uk-grid-margin">
                <progress class="uk-progress uk-progress-success" value="55" max="100">55%</progress>
            </div>
            <div class="uk-width-1-2@s uk-grid-margin uk-row-first">
                <progress class="uk-progress uk-progress-warning" value="55" max="100">55%</progress>
            </div>
            <div class="uk-width-1-2@s uk-grid-margin">
                <progress class="uk-progress uk-progress-danger" value="55" max="100">55%</progress>
            </div>
            <div class="uk-width-1-2@s uk-form uk-grid-margin uk-row-first">
                <h3>Form states</h3>
                <div class="uk-margin">
                    <input class="uk-input  uk-form-width-medium" type="text" placeholder="default"
                           value="">
                </div>
                <div class="uk-margin">
                    <input class="uk-input uk-form-danger uk-form-width-medium" type="text" placeholder="form-danger"
                           value="">
                </div>

                <div class="uk-margin">
                    <input class="uk-input uk-form-success uk-form-width-medium" type="text" placeholder="form-success"
                           value="">
                </div>

                <div class="uk-margin">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="disabled" value="disabled"
                           disabled>
                </div>

            </div>
            <div class="uk-width-1-2@s uk-form uk-grid-margin">
                <h3>Form styles</h3>
                <form>
                    <div class="uk-margin">
                        <input class="uk-input uk-form-width-medium uk-form-large" type="text" placeholder="Large">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Default">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="Small">
                    </div>

                </form>
            </div>
        </div>
    </div>


</div>
<div id="offcanvas-slide" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</p>

    </div>
</div>

<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</p>

    </div>
</div>

<div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</p>

    </div>
</div>

<div id="modal-sections" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Modal Title</h2>
        </div>
        <div class="uk-modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </div>
    </div>
</div>
<!-- /wp:html -->

CONTENT;
