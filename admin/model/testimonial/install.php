<?php 
    class ModelTestimonialInstall extends Model {
        public function addExtensionTables() {

            $this->db->query("CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonial(
            `testimonial_id` int(11) NOT NULL,
            `name` varchar(64) NOT NULL,
            `status` tinyint(1) NOT NULL,
            PRIMARY KEY (`testimonial_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");

            $this->db->query("CREATE TABLE " . DB_PREFIX . "testimonial_image(
            `testimonial_image_id` int(11) NOT NULL,
              `testimonial_id` int(11) NOT NULL,
              `link` varchar(255) NOT NULL,
              `image` varchar(255) NOT NULL,
              `sort_order` int(3) NOT NULL DEFAULT '0',
              PRIMARY KEY (`testimonial_image_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");

            $this->db->query("CREATE TABLE " . DB_PREFIX . "testimonial_image_description(
            `testimonial_image_id` int(11) NOT NULL,
              `language_id` int(11) NOT NULL,
              `testimonial_id` int(11) NOT NULL,
              `title` varchar(64) NOT NULL,
              `message` text NOT NULL,
              `name` varchar(250) NOT NULL,
              `position` varchar(250) NOT NULL,
              PRIMARY KEY (`testimonial_image_id`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");

            $this->db->query("ALTER TABLE " . DB_PREFIX . "testimonial
            MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
            $this->db->query("ALTER TABLE " . DB_PREFIX . "testimonial_image
            MODIFY `testimonial_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");

        }
    }
?>