
<div class="row center-align mt-5">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12 m10 l10">
                        <textarea id="encrypter" class="materialize-textarea"></textarea>
                        <label for="encrypter">Text Encrypter</label>
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <a class="waves-effect waves-light btn red darken-1" id="encrypt">Encrypt</a>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="row center-align mt-5">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                    <textarea id="encrypted_text" class="materialize-textarea"></textarea>
                        <label for="encrypted_text">Encrypted Text</label>
                    </div>

                    <div class="input-field col copy" style="margin-left: -5em;" data-clipboard-target="#encrypted_text"> 
                        <img class="clippy right" src="https://clipboardjs.com/assets/images/clippy.svg" width="20" alt="Copy to clipboard">
                    </div>

                </div>
                
            </form>
        </div>

