var jsYoutubeId = require( '..' ),
    assert = require( 'assert' );

describe('jsYoutubeId()', function() {
  it('should be FqnKB22pOC0.', function() {
    assert.equal( jsYoutubeId( 'https://www.youtube.com/watch?v=FqnKB22pOC0' ), 'FqnKB22pOC0' );
  });

  it('should be FqnKB22pOC0.', function() {
    assert.equal( jsYoutubeId( 'https://youtu.be/FqnKB22pOC0' ), 'FqnKB22pOC0' );
  });

  it('should be FqnKB22pOC0', function() {
    assert.equal( jsYoutubeId( 'https://www.youtube.com/embed/FqnKB22pOC0' ), 'FqnKB22pOC0' );
  });

  it('should be undefined', function() {
    assert.equal( jsYoutubeId( 'https://www.a.com' ), '' );
  });
});
