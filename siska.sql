/*
 Navicat Premium Data Transfer

 Source Server         : Latihan PostgreSQL
 Source Server Type    : PostgreSQL
 Source Server Version : 100013
 Source Host           : localhost:5432
 Source Catalog        : siska
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 100013
 File Encoding         : 65001

 Date: 01/06/2020 20:43:29
*/


-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS "public"."contact";
CREATE TABLE "public"."contact" (
  "id" int4 NOT NULL,
  "nama" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "subjek" varchar(100) COLLATE "pg_catalog"."default",
  "body" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS "public"."guru";
CREATE TABLE "public"."guru" (
  "id" int4 NOT NULL,
  "nip" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "nama" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "jabatan" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" text COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO "public"."guru" VALUES (2, '123456', 'Soleh Cakep', 'Guru Kelas', 'Kp. Babakan Cinta');
INSERT INTO "public"."guru" VALUES (1, '123457', 'Uchiha Madara', 'Assisten Guru', 'Kp.Medut');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS "public"."kelas";
CREATE TABLE "public"."kelas" (
  "id_kelas" int4 NOT NULL,
  "nama_kelas" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "tahun_angkatan" date NOT NULL,
  "jumlah_siswa" int4 NOT NULL,
  "id_guru" int4 NOT NULL,
  "status" char(1) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO "public"."kelas" VALUES (1, 'Gemintang', '2020-06-01', 20, 1, '1');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS "public"."siswa";
CREATE TABLE "public"."siswa" (
  "id_pendaftaran" int2 NOT NULL,
  "nis" char(16) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_siswa" varchar(30) COLLATE "pg_catalog"."default" NOT NULL,
  "jenis_kelamin" char(1) COLLATE "pg_catalog"."default" NOT NULL,
  "tempat_lahir" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal_lahir" date NOT NULL,
  "agama" varchar(25) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "wali_siswa" char(30) COLLATE "pg_catalog"."default" NOT NULL,
  "no_hp" int4 NOT NULL,
  "id_kelas" char(5) COLLATE "pg_catalog"."default" NOT NULL,
  "angkatan" date NOT NULL,
  "id_user" char(5) COLLATE "pg_catalog"."default" NOT NULL,
  "status" char(1) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO "public"."siswa" VALUES (1, '321654          ', 'testing', 'L', 'Bandung', '2020-06-01', 'Islam', 'Kp.Pasar', 'ayah                          ', 123456, '1    ', '2020-06-01', '1    ', '1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id_user" int4 NOT NULL,
  "nama_user" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "sandi" varchar(8) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "public"."users" VALUES (1, 'King Medut', '123456');

-- ----------------------------
-- Primary Key structure for table contact
-- ----------------------------
ALTER TABLE "public"."contact" ADD CONSTRAINT "contact_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table guru
-- ----------------------------
ALTER TABLE "public"."guru" ADD CONSTRAINT "guru_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kelas
-- ----------------------------
ALTER TABLE "public"."kelas" ADD CONSTRAINT "kelas_pkey" PRIMARY KEY ("id_kelas");

-- ----------------------------
-- Primary Key structure for table siswa
-- ----------------------------
ALTER TABLE "public"."siswa" ADD CONSTRAINT "auto_increment" PRIMARY KEY ("id_pendaftaran");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id_user");

-- ----------------------------
-- Foreign Keys structure for table kelas
-- ----------------------------
ALTER TABLE "public"."kelas" ADD CONSTRAINT "fk_orders" FOREIGN KEY ("id_kelas") REFERENCES "public"."guru" ("id") ON DELETE RESTRICT ON UPDATE RESTRICT;

-- ----------------------------
-- Foreign Keys structure for table siswa
-- ----------------------------
ALTER TABLE "public"."siswa" ADD CONSTRAINT "fk_kelas" FOREIGN KEY ("id_pendaftaran") REFERENCES "public"."kelas" ("id_kelas") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."siswa" ADD CONSTRAINT "fk_user" FOREIGN KEY ("id_pendaftaran") REFERENCES "public"."users" ("id_user") ON DELETE RESTRICT ON UPDATE RESTRICT;
