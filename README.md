Written by: wes
9/13/2014

This is an SMS queuing service; it is intended to be used for reminders. To run it simply put the .sms_creds file in ~ and populate the file with your 10 digit phone number. Be sure to uncomment your cell phone provider.

If your provider is not listed then you can add it by apending an uncommented line with the name of the provider and the SMS Gateway Server for the provider; be sure to put ' ~ ' between the fields. You can use the following site as a reference for the SMS Gateway Servers: http://martinfitzpatrick.name/list-of-email-to-sms-gateways/

To execute the script run as follows:

/path/to/script HH:MM "Buy dog food."
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NOTE: HH:MM refers to *time from now* rather than a specific time, e.g. 05:20 is telling the server to send the SMS in 5 hours and 20 minutes. 

Example time formats:
* HH:MM
* H
* :M

If no user is specified the default user is used; to specifiy a different user run it as follows:

/path/to/script user1 HH:MM "Buy dog food."
/path/to/script user2 HH:MM "Buy dog food."
