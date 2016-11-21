##RainbowConnection Backend

Here is my Laravel portion of the project.

When I first started working on the project, I got a little carried away with Laravel and implemented things that probably should've been left for Ember.  Because of that, this repository is not just an API.  Rather, it includes code for:

- Full list of user entries (and working links to each individual's show page)
- Display of favorite color field (no actual color change implemented)
- Individual user profiles
- Infinite Pagination

Unfortunately I did not get my connections table working correctly with my users table.  I manually seeded a few entries to experiment, and came up with code that would display the correct list of connections for a user on each individual show page.  I did not create a factory to seed this however, because I realized all of that functionality should've been left for Ember once the Ember app connects with the API (This is when I switched over to the Ember portion).  That code still exists in this repository, and if you manually enter entries in the connections database you will be able to see that functionality working.  You'll also notice that the repository says there are two contributors.  This is because I tried to deploy to heroku very early on, not knowing that I'd be able to make Ember connect to a database running on a local server.  I'm not sure why trying to deploy to heroku resulted in a second 'contributor', but I moved on from that pretty soon afterwards.  I was the only person who contributed to the code in this repository.

Due to me having gone a little extra with Laravel, I realized I didn't completely create my API correctly.  As a result, moving over to Ember proved to be extra difficult since it was trying to connect with something that was not well established.  My Ember application was not able to successfully connect to my Laravel API.  No further functionality was implemented on Ember.

I came back to fix my routes so that my API would fit better, but was still not able to get the connections table working or a stable connection between the two applications.

After cloning, you can run your migrations and seed the database.  I couldn't get the connections to work properly, so you will notice that seeding will only provide the other properties (fullname, favorite_color & email are all visible in the JSON.  However, users are all seeded with an encrypted password that allows for a login.  This was also implemented early on when I overthought the 'change color functionality', and thought that a user would only be able to change their favorite color if they were logged in).


As it stands, main routes take you to the API functions.

- 'rainbowconnection.com' will redirect to 'rainbowconnection.com/users', which is a JSON of all of the users available.
- 'rainbowconnection.com/users/{$id}' will take you to a single JSON object that belongs to the appropriate user.
