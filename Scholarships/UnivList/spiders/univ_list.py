import scrapy
from scrapy import Selector
from UnivList import items

class UnivListSpider(scrapy.Spider):
	name = "scholarship_all"
	allowed_domains = ["http://www.studyabroad.com"]
	#Change start url for different countries....
	start_urls = [
		'http://www.studyabroad.com/scholarships.aspx']
	
	def parse(self, response):
		hxs = Selector(response)
		urls = hxs.xpath("//h3")
		unv_list = []
		for url in urls:
			item = items.UnivlistItem()
			item ["title"] = url.select("a/text()").extract()
			item ["link"] = url.select("a/@href").extract()
			unv_list.append(item)
		return unv_list
