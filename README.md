# UNMAINTAINED, UNIFINSHED! DO NOT USE
This is literally code from middle school. This is hacked together garbage and does not reflect my current abilities or security awareness. This is absolute garbage and is published soley for me to be able to look back on what code I've written and how I've grown. 

My opinions about privacy and security have changed greatly since then, and I realize how invasive and obtrusive such a system could be if proplerly deployed. This code represents neither my ability nor my current (and much of my past) political beliefs.

This repo was going to basically be an invasive version of an existing PHP tracking-pixel general purpose analytics tool that was for use on forums by forum users, emails and other web locations without any or sufficient HTML/JS embed capability and without image cacheing

# GitTracking Pixel

![GitTracker LOGO](gittracker.png)

A simple image embed that can be added to github README's to track users

You _can_ start your own server running this code, but I reccomend using the existing one that I've setup - this will allow more data to be collected, and more users to be linked to themselves (interests tracking based on github tags)

The data is made public, and IP addresses are linked to identfiers.

## Features:
- Tracks user's github view history
	- Only repos with the tracking pixel installed can be and tracked
- Users can turn off the tracking pixel (in order to protect privacy)
- Stored in database


https://dgramop.xyz/tracking/git.php

## Privacy:

If you would like your IP to be untracked, I reccomend adding submitting a pull request to whitelist.ips. Please create a newline and type in your IP.

This may not untrack your IP everywhere, but it will untrack it on all new downloads of this repo (for those owners that chose to keep the default file)

You should also visit

https://dgramop.xyz/tracking/untrack.php

To untrack you IP on my server.

The path to untrack your IP address is /untrack.php
