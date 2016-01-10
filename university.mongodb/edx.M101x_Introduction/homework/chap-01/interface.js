/*
 *  Inserts "doc" into the collection "movies".
 */
exports.insert = function(db, doc, callback) {
  // TODO: implement
  db.collection('movies').insert(doc, function(error, result) {
    if (error) {
    }
    callback(null);
  });
};

/*
 *  Finds all documents in the "movies" collection
 *  whose "director" field equals the given director,
 *  ordered by the movie's "title" field. See
 *  http://mongodb.github.io/node-mongodb-native/2.0/api/Cursor.html#sort
 */
exports.byDirector = function(db, director, callback) {
  // TODO: implement
  var options = {'sort': 'title'};
  db.collection('movies').find({'director':director}, options).toArray(function(error, results) {
    if (error) {
      callback(null, []);
    } else {
      callback(null, results);
    }
  });
};
