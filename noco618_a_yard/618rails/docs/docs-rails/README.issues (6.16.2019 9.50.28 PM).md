problems..

2019-06-16_Sun_11.17-AM

2.
factory girl gem is deprecated. may have to remove it.
done.

3.
fixed, i think,
when running both dev and production, logging in forces logout on the other.
closed - I now include env in cookie name.

4.
when I removed Gemfile.lock to allow full upgrade, many things did not work. I just reverted to the old Gemfile.lock.
