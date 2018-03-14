# js-youtube-id

Get youtube vodeo id from URL

## Install

```
$npm install js-youtube-id
```

## Usage

```
var jsYoutubeId = require( 'js-youtube-id' );

var id = jsYoutubeId( 'https://www.youtube.com/watch?v=FqnKB22pOC0' );
//"FqnKB22pOC0"

var id = jsYoutubeId( 'https://youtu.be/FqnKB22pOC0' );
//"FqnKB22pOC0"

var id = jsYoutubeId( 'https://www.youtube.com/embed/FqnKB22pOC0' );
//"FqnKB22pOC0"

var id = jsYoutubeId( 'https://www.a.com' );
//"" (empty string)

```

## API

```
var jsYoutubeId = require( 'js-youtube-id' );
jsYoutubeId( youtubeUrl );

```

## build
* npm install babel -g
* npm run compile

## Test
* npm install mocha -g
* npm test

## License
© 2016 ingpdw. MIT License
