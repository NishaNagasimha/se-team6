import scrapy

class LiberalartsItem(scrapy.Item):
	rank = scrapy.Field()
	name = scrapy.Field()
	location = scrapy.Field()
	tuitionFee = scrapy.Field()
	enrollment = scrapy.Field()
	image_urls = scrapy.Field()	
	images = scrapy.Field()
	link = scrapy.Field()
	#desc = scrapy.Field()
	#settings = scrapy.Field()
