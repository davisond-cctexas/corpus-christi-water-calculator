/*
 * js-youtube-id - lib/js-youtube-id.js
 * Copyright(c) 2016 ingpdw <ingpdw@gmail.com>
 */

'use strict';

exports = module.exports = function( url ) {
  let checkUrl = ( url.indexOf( 'http://youtu.be' ) > -1 ||
    url.indexOf( 'https://youtu.be' ) > -1 ) ?
      /\/\/youtu.be\/([\w|\-]*)/ :
      ( url.indexOf( '/embed/' ) > -1 ) ?
        /\/\/www.youtube.com\/embed\/([\w|\-]*)/ :
        ( url.indexOf( '/v/' ) > -1 ) ?
          /\/\/www.youtube.com\/v\/([\w|\-]*)/ :
          /^https?:\/\/www.youtube.com\/watch\?.*?v=([\w|\-]*)/;

  let id = checkUrl.exec( url );

  if( id instanceof Array ) id = id[ 1 ];

  return id || '';
};
