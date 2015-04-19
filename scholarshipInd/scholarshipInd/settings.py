# -*- coding: utf-8 -*-

# Scrapy settings for scholarshipInd project
#
# For simplicity, this file contains only the most important settings by
# default. All the other settings are documented here:
#
#     http://doc.scrapy.org/en/latest/topics/settings.html
#

BOT_NAME = 'scholarshipInd'

SPIDER_MODULES = ['scholarshipInd.spiders']
NEWSPIDER_MODULE = 'scholarshipInd.spiders'

CONCURRENT_REQUESTS = 1
CONCURRENT_REQUESTS_PER_DOMAIN = 1

# Crawl responsibly by identifying yourself (and your website) on the user-agent
#USER_AGENT = 'scholarshipInd (+http://www.yourdomain.com)'
USER_AGENT = 'Googlebot/2.1 (+http://www.googlebot.com/bot.html)'
COOKIES_ENABLED = False
