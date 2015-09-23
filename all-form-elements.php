<h2>Forms galore!</h2>

<form>
  
  <p class="form__fieldgroup required">
    <label class="fieldgroup__label" for="name"><span class="is-required">* </span>Name (text input)</label>
    <input type="text" id="name" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label"><span class="is-required">* </span>Checkbox</label>
    <input type="checkbox" name="checkbox" value="1" id="checkbox-1" /><label for="checkbox-1">One</label>
    <input type="checkbox" name="checkbox" value="2" id="checkbox-2" /><label for="checkbox-2">Two</label>
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="color">Color</label>
    <input type="color" id="color" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="date">Date</label>
    <input type="date" id="date" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="datetime">Datetime</label>
    <input type="datetime" id="datetime" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="email">Email</label>
    <input type="email" id="email" />
  </p>

  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="file">File</label>
    <input type="file" id="file" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="month">Month</label>
    <input type="month" id="month" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="number">Number</label>
    <input type="number" id="number" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label">Radio</label>
    <input type="radio" name="radio" id="radio-red" value="Red" checked /><label for="radio-red">Red</label>
    <input type="radio" name="radio" id="radio-blue" value="Blue" /><label for="radio-blue">Blue</label>
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="range">Range</label>
    <input type="range" id="range" min="1" max="10" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="search">Search</label>
    <input type="search" id="search" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="tel">Tel</label>
    <input type="tel" id="tel" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="time">Time</label>
    <input type="time" id="time" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="url">URL</label>
    <input type="url" id="url" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="week">Week</label>
    <input type="week" id="week" />
  </p>
  
  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="datalist">Type a browser name</label>
    <input list="browsers" id="datalist" />
      <datalist id="browsers">
        <option value="Internet Explorer">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
    </datalist>
  </p>

  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="textarea">Textarea</label>
    <textarea id="textarea"></textarea>
  </p>

  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="single-line">A single line select</label>
    <select id="single-line">
      <option value="1">one</option>
      <option selected value="2">two</option>
      <option value="3">three</option>
      <option value="4">four</option>
    </select>
  </p>

  <p class="form__fieldgroup">
    <label class="fieldgroup__label" for="multi-line">A multiple line select</label>
    <select name="multi-line" size=3 multiple>
      <option value="5">five</option>
      <option selected value="6">six</option>
      <option value="7">seven</option>
      <option value="8">eight</option>
    </select>
  </p>

  <p class="form__fieldgroup">
    <fieldset>
      <legend>Buttons</legend>
      <input class="button--small" type="submit" value="&lt;input&gt; Submit">
      <input class="button--small" type="reset" value="&lt;input&gt; Reset">
      <input class="button--small" type="button" value="&lt;input&gt; Button">
      <button class="button--small" type="submit">&lt;button&gt; Submit</button>
      <button class="button--small" type="reset">&lt;button&gt; Reset</button>
      <button class="button--small" type="button">&lt;button&gt; button</button>
    </fieldset>
  </p>
</form>