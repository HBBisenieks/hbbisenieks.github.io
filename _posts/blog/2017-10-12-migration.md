---
layout: blog
category: blog
published: true
title: "Migrating to Github and Jekyll: Why"
tags:
  - website migration
  - Jekyll
  - Github
  - GoDaddy
---

Some months ago, I made the decision to migrate my website (this
very thing that you're reading *right now)* to Github Pages. This
was, in large part, because I was bored and a bit fed up with my
existing site.

I coded the first iteration of HilaryBisenieks.com in 2009, writing
it all in Notepad, which is Not A Great Way. But I was young, then,
and not indoctrinated into the Church of Vim (don't @ me). It was
small and kinda lousy, with a table-based layout. If I wanted to
update a menu entry, I had to change it in every single page.

Eventually, I re-wrote the whole structure of the site, using PHP
to make it somewhat modular. I'd already ditched the tables in
favor of divs, but now if I wanted to update a menu item, it was
a matter of changing and re-uploading only a single file. I was
basically in just the right place for Jekyll, my templates being
a series of include statements, pulling in all the little snippets
of code as desired for my blog widgets and sidebar items.

That worked. Basically. But I had occasional security issues:
random extra pages getting dropped onto my FTP server, seemingly
at random, that got the site flagged for malware on several
occasions. Which is Not Great.

And I wanted to redesign the thing anyway. I just didn't really
have the motivation or the tools.

Then [Fireside Fiction](https://firesidefiction.com) redid their
site and *[talked about it](https://firesidefiction.com/about-our-new-site).*
That lit a fire under my ass. At that point, I checked and saw
that my paid hosting through GoDaddy, who I kind of despise (but
signed on with back in the day because, again, young and ignorant),
would be coming up for renewal in about 7 months.

I had a time-frame, and thanks to Pablo's posts, I had an idea
of what tools I could use. From there, it just became a matter of
doing the work. So of course I left large portions un-done until
the very last minute. (In fact, there are still some things missing
that had been present on my old site.)

So here we are.

If you see something that seems off, you can email me about it at
webmaster [at] hilarybisenieks [dot] com or just make a pull
request on Github. The source for this site is all up there for
your perusal.
