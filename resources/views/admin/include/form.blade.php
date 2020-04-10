@csrf    
    <div class="row ">

        <div class="col-12">
            <div class="form-group">
            <input id="my-input" class="form-control p_input rounded-0 @error('name') is-invalid @enderror" type="text" value="{{ old('name') ?: $news->name }}" name="name" placeholder="Création d'une nouvelle article ...">
            </div>
            {{-- {!! $errors->first('name', '<p class="error">:message</p>') !!} --}}
                        @error('name') 
                        <div class="invalid-tooltip">{{ $errors->first('name') }}</div>
                        @enderror
        </div>

        
        <div class="col-12">
            
            <div class="form-group">
                    <textarea  id="my-textarea" class="form-control @error('content') is-invalid @enderror" name="content" rows="3" placeholder="Renseigner les informations relatifs à votre article par ici ..."style="height:400px; word-spacing: 5px; letter-spacing: 2px; line-height: 28px;" value="">{{ $news->content }}</textarea>
            </div>
                @error('content') 
                <div class="invalid-tooltip">{{ $errors->first('content') }}</div>
                @enderror
        </div>

                <div class="col-4">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('slug') is-invalid @enderror" type="text" name="slug" value="{{ $news->slug  }}" placeholder="slug">
                    </div>
                                @error('slug') 
                                <div class="invalid-tooltip">{{ $errors->first('slug') }}</div>
                                @enderror
                </div>

                

                <div class="col-5">

                    <div class="form-group">
                        <label class="custom-file">
                          <input type="file" name="image" value="{{ $news->image }}" id="" placeholder="" class="custom-file-input" aria-describedby="fileHelpId">
                          <span class="custom-file-control"></span>
                        </label>
                        <small id="fileHelpId" class="form-text text-muted">Associez un visuel </small>
                      </div>

                </div>

                <div class="col-3">
                    <div class="form-group">
                          <select class="form-control form-control-sm" name="status" id="">
                                <option value="0">En attente</option>
                                <option value="1">En ligne</option>
                          </select>
                          <small id="fileHelpId" class="form-text text-muted">Statut de l'article</small>

                    </div>
                                
                </div>
                

                


    </div>

 