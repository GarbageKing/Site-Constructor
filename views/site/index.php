<?php

/* @var $this yii\web\View */

$this->title = 'Site constructor';

$this->registerJsFile('/siteconstruct/basic/web/js/newjs.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Make your webpage!</h1>

        <p class="lead">Make your simple bootstrap powered one page website faster than you can read this!</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-4" >
                <h2>Preview</h2>

                    <div class="row">
                        <div id="preview" class="col-xs-12">
                    
                        </div>
                        <div class="col-xs-12">
                            <button id="make" class="btn btn-success btn-lg">Create</button>
                        </div>
                    </div>
                
                <h2>Output</h2>

                    <div class="row">
                       <textarea class="form-control" rows="10" id="output"></textarea>
                    </div>
            </div>
            <div class="col-md-6">
                <h2>Options</h2>
                
                <div class="row">
                   <div class="col-md-12"><h4>Header</h4></div>
                </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            Company name
                        </div>
                        <div class="col-md-2">
                            Menu 1
                        </div>
                        <div class="col-md-2">
                            Menu 2
                        </div>
                        <div class="col-md-2">
                            Menu 3
                        </div>
                        <div class="col-md-2">
                            Menu 4
                        </div>
                        <div class="col-md-2">
                            Menu 5
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-2">                            
                            <input type="text" class="form-control" id="comp-name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-1">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-2">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-3">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-4">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-5">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-2">
                            Links:
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-1-href">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-2-href">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-3-href">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-4-href">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="menu-5-href">
                        </div>
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <button id="add-header" class="btn btn-success btn-lg">Add to preview</button>
                    </div>
                </div>
                
                <div class="row">
                   <div class="col-md-12"><h4>Big Title</h4></div>
                </div>
                
                    <div class="row">                        
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="big-title">
                        </div>
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <button id="add-title" class="btn btn-success btn-lg">Add to preview</button>
                    </div>
                </div>
                
                <div class="row">
                   <div class="col-md-12"><h4>Section One divs</h4></div>
                </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            Div's header
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="div-1-header">
                        </div>
                        <div class="col-md-12">
                            Div's content
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="div-1"></textarea>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            Div's header
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="div-2-header">
                        </div>
                        <div class="col-md-12">
                            Div's content
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="div-2"></textarea>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            Div's header
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="div-3-header">
                        </div>
                        <div class="col-md-12">
                            Div's content
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="div-3"></textarea>
                        </div>
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <button id="add-section1" class="btn btn-success btn-lg">Add to preview</button>
                    </div>
                </div>
                
                <div class="row">
                   <div class="col-md-12"><h4>Section Two divs</h4></div>
                </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            Div's header
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="div-4-header">
                        </div>
                        <div class="col-md-12">
                            Div's content
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="div-4"></textarea>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            Div's header
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="div-5-header">
                        </div>
                        <div class="col-md-12">
                            Div's content
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="div-5"></textarea>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            Div's header
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="div-6-header">
                        </div>
                        <div class="col-md-12">
                            Div's content
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="div-6"></textarea>
                        </div>
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <button id="add-section2" class="btn btn-success btn-lg">Add to preview</button>
                    </div>
                </div>
                
                <div class="row">
                   <div class="col-md-12"><h4>Footer</h4></div>
                </div>
                
                <div class="row">
                    
                        <div class="col-md-6">
                            Copyright info
                        </div>
                        <div class="col-md-6">
                            Additional text
                        </div>
                    
                    
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="footer-copyright">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="footer-add">
                        </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button id="add-footer" class="btn btn-success btn-lg">Add to preview</button>
                    </div>
                </div>
                
            </div>
            <div class="col-md-2">
                <h2>Color picker</h2>

                    <div class="row">                    
                    <?php foreach ($colors as $color): ?>
                        <div class="col-md-3">
                        <div class="col-pick" style="height:12px; background-color:<?= $color->hexa ?>; border:1px solid;">                        
                        </div>
                        </div>                    
                    <?php endforeach; ?>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="header-col" type="radio" name="optcolor">Header color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="comp-col" type="radio" name="optcolor">Company color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="header-links-col" type="radio" name="optcolor">Header links color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="big-title-col" type="radio" name="optcolor">Title color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="text-title-col" type="radio" name="optcolor">Title text color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="sec1-col" type="radio" name="optcolor">Section 1 color</label>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="sec1-titles-col" type="radio" name="optcolor">Section 1 titles color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="sec1-texts-col" type="radio" name="optcolor">Section 1 texts color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="sec2-col" type="radio" name="optcolor">Section 2 color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="sec2-titles-col" type="radio" name="optcolor">Section 2 titles color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="sec2-texts-col" type="radio" name="optcolor">Section 2 texts color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="foot-col" type="radio" name="optcolor">Footer color</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input id="foot-text-col" type="radio" name="optcolor">Footer text color</label>
                            </div>
                        </div>                 
                        
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">                            
                                <button id="confirm-col" class="btn btn-success btn-lg">Confirm color</button>                          
                        </div>
                    </div>

            </div>
        </div>

    </div>
</div>
