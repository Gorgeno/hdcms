<div class="form-group ">
    <label for="captcha">图形验证码</label>

    <div class="input-group @error('captcha') is-invalid @enderror" style="cursor: pointer">
        <input type="text" name="captcha" class="form-control" id="captcha" placeholder="请填写验证码">
        <div class="input-group-append ">
            <img src="/captcha" onclick="this.src='/captcha?'+Math.random()" class="input-group-text p-0"
                style="height: 35px;" />
            {{-- <span class="input-group-text" id="basic-addon2">@example.com</span> --}}
        </div>
    </div>
    @error('captcha')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>